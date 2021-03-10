<?php

namespace App\Http\Controllers;


use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

use Illuminate\Http\Request;
use App\Models\patient_work;
use App\Models\tooth_description;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    //
    public function index()
    {
        $patient = patient_work::all();
        return view('Frontend.patient',compact('patient'));
    }

    public function addView()
    {
        return view('Frontend.new_patient');
    }
    public function save(Request $request)
    {
        $patient = new patient_work();
        $work_patient = new tooth_description();
        $patient->patient_name = $request->patient_name;
        $patient->age = $request->age;
        $patient->doctor_id = $request->doctor_id; 
        $work_patient->tooth_Number = implode(",",$request->tooth_number);
        $patient->work_id = $request->work_item_id;
        $patient->shade= $request->shade_id;
        $patient->abutments = $request->abutments;
        $patient->work_code = "PR".date('Y').rand(000010,100000);
        $patient->save();
        $workName = DB::table('work_item')->select('work_item')->where('id',$patient->work_id)->first();
        $QrCode = " \n Patient Name : ".$patient->patient_name." \n Tooth Number : ".$patient->tooth_Number."\n Work : ". $workName->work_item;
        return view('Frontend.QrCode',compact('QrCode'));

    }

    public function invoice()
    {

        $client = new Party([
            'name'          => 'Roosevelt Lloyd',
            'phone'         => '(520) 318-9486',
            'custom_fields' => [
                'note'        => 'IDDQD',
                'business id' => '365#GG',
            ],
        ]);

        $customer = new Party([
            'name'          => 'Ashley Medina',
            'address'       => 'The Green Street 12',
            'code'          => '#22663214',
            'custom_fields' => [
                'order number' => '> 654321 <',
            ],
        ]);

        $items = [
            (new InvoiceItem())->title('Service 1')->pricePerUnit(47.79)->qty(2)->discount(10),
            (new InvoiceItem())->title('Service 2')->pricePerUnit(71.96)->qty(2),
            (new InvoiceItem())->title('Service 3')->pricePerUnit(4.56),
            (new InvoiceItem())->title('Service 4')->pricePerUnit(87.51)->qty(7)->discount(4)->units('kg'),
            (new InvoiceItem())->title('Service 5')->pricePerUnit(71.09)->qty(7)->discountByPercent(9),
            (new InvoiceItem())->title('Service 6')->pricePerUnit(76.32)->qty(9),
            (new InvoiceItem())->title('Service 7')->pricePerUnit(58.18)->qty(3)->discount(3),
            (new InvoiceItem())->title('Service 8')->pricePerUnit(42.99)->qty(4)->discountByPercent(3),
            (new InvoiceItem())->title('Service 9')->pricePerUnit(33.24)->qty(6)->units('m2'),
            (new InvoiceItem())->title('Service 11')->pricePerUnit(97.45)->qty(2),
            (new InvoiceItem())->title('Service 12')->pricePerUnit(92.82),
            (new InvoiceItem())->title('Service 13')->pricePerUnit(12.98),
            (new InvoiceItem())->title('Service 14')->pricePerUnit(160)->units('hours'),
            (new InvoiceItem())->title('Service 15')->pricePerUnit(62.21)->discountByPercent(5),
            (new InvoiceItem())->title('Service 16')->pricePerUnit(2.80),
            (new InvoiceItem())->title('Service 17')->pricePerUnit(56.21),
            (new InvoiceItem())->title('Service 18')->pricePerUnit(66.81)->discountByPercent(8),
            (new InvoiceItem())->title('Service 19')->pricePerUnit(76.37),
            (new InvoiceItem())->title('Service 20')->pricePerUnit(55.80),
        ];

        $notes = [
            'your multiline',
            'additional notes',
            'in regards of delivery or something else',
        ];
        $notes = implode("<br>", $notes);

        $invoice = Invoice::make('receipt')
            ->series(6543)
            ->sequence(667)
            ->serialNumberFormat('{SEQUENCE}/{SERIES}')
            ->seller($client)
            ->buyer($customer)
            ->date(now()->subWeeks(3))
            ->dateFormat('m/d/Y')
            ->payUntilDays(14)
            ->currencySymbol('$')
            ->currencyCode('USD')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->filename($client->name . ' ' . $customer->name)
            ->addItems($items)
            ->save('public');

        $link = $invoice->url();
        // Then send email to party with link

        // And return invoice itself to browser or have a different view
        return $invoice->render();
    }
}
