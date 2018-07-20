<?php
/*todo
*change workorder request variable names to the same in both functions
*
*/
namespace App\Http\Controllers;
use App\WorkOrder as WorkOrder;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WorkOrders extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function create(Request $request) {
        // $response = [
        //     'message' => 'yeet',
        //     'Status' => 201
        // ];
        $newWo = new WorkOrder;
        $WoRequestObj = $request->get('WorkOrder');
        $openDate = (string)$WoRequestObj->{'OpenDate'};
        $newWo::create([
           'WoNum' => (int)$WoRequestObj->{'WoNum'},
           'WoNumStr' => (string)(int)$WoRequestObj->{'WoNum'},
           'Priority' => (string)$WoRequestObj->{'Priority'},
           'OpenDate' => Carbon::createFromTimeString(substr($openDate,0,19), 'PST')->addHours(-1),
           'ContactPhone' => (string)$WoRequestObj->{'ContactPhone'},
           'Craft' => (string)$WoRequestObj->{'Craft'},
           'Crew' => (string)$WoRequestObj->{'Crew'},
           'Location' => (string)$WoRequestObj->{'Location'},
           'LocationDesc' => (string)$WoRequestObj->{'LocationDesc'},
           'Note2' => (string)$WoRequestObj->{'Note2'},
           'Request' => (string)$WoRequestObj->{'Request'},
           'Status' => (string)$WoRequestObj->{'Status'},
           'Room' => (string)$WoRequestObj->{'Room'},
           'WoType' => (string)$WoRequestObj->{'WoType'} 
        ]);
        $newWo->save();

    }

    public function update(Request $request) {
        $WoObj = $request->get('WorkOrder');
        $openDate = (string)$WoRequestObj->{'OpenDate'};
        $modifyDate = (string)$WoRequestObj->{'ModifyDate'};
        $wo = WorkOrder::raw()->replaceOne(
            ['WoNum' => (int)$WoObj->{'WoNum'}],
            [
                'WoNumStr' => (string)(int)$WoObj->{'WoNum'},
                'Priority' => (string)$WoObj->{'Priority'},
                'OpenDate' => Carbon::createFromTimeString(substr($openDate,0,19), 'PST')->addHours(-1),
                'ContactPhone' => (string)$WoObj->{'ContactPhone'},
                'Craft' => (string)$WoObj->{'Craft'},
                'Crew' => (string)$WoObj->{'Crew'},
                'Location' => (string)$WoObj->{'Location'},
                'LocationDesc' => (string)$WoObj->{'LocationDesc'},
                'Note2' => (string)$WoObj->{'Note2'},
                'Request' => (string)$WoObj->{'Request'},
                'Status' => (string)$WoObj->{'Status'},
                'Room' => (string)$WoObj->{'Room'},
                'WoType' => (string)$WoObj->{'WoType'},
                'ModifyDate' => Carbon::createFromTimeString(substr($modifyDate,0,19), 'PST')->addHours(-1),

            ]
            );
        
        
    }
}