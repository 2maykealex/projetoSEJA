<?php

namespace App\Http\Controllers\Subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Person;
use App\Models\UserProfile;
use App\Models\Subscriber;
use App\Models\SubscriptionRegistry;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subscriber.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request){
        $data = $request->all();
        $userData = [];
        $userData['name']     = $data['name'];
        $userData['email']    = $data['email'];
        $userData['password'] = $data['password'];

        $userBd = User::where('email', $data['email'])->get()->first(); //verifica se existe o email de novo usuário no banco 
        if (!$userBd){
            $user = new User;
            $idNewUser = $user->newUser($userData);
            $idNewUser = $idNewUser[0];

            if($idNewUser){
                $personData = [];
                $personData['name']      = $data['name'];
                $personData['user_id']   = $idNewUser;
                $personData['cpf']       = $data['cpf'];
                $personData['telephone'] = $data['telephone'];
                $personData['zipcode']   = $data['zipcode'];
                $personData['address']   = $data['address'];
                $personData['city_id']   = $data['city'];
                $personData['image']     = "";

                $person = new Person;
                $idNewPerson = $person->newPerson($personData);

                if($idNewPerson){
                    $dados['user_id']          = $idNewUser;  #id do novo usuário
                    $dados['user_profile_id']  = 2;        #subscriber

                    $userProfile = new UserProfile;
                    $saveUserProfile = $userProfile->newUserProfile($dados);

                    if($saveUserProfile){
                        $subscriberData['person_id'] = $idNewPerson[0];
                        // $subscriberData['paymentMethod'] = "teste";
                        $subscriber = new Subscriber;
                        $saveSubscriber = $subscriber->newSubscriber($subscriberData);
                        
                        if($saveSubscriber){
                            $subscriptionRegistryData['person_id'] = $idNewPerson[0];
                            $subscriptionRegistryData['subscription_plan_id'] = $data['subscription_plan_id'];
                            $subscriptionRegistryData['status'] = 0; 
                            $subscriptionRegistryData['expires_in'] = "30/07/2019";
                            $subscriptionRegistry = new SubscriptionRegistry;
                            $saveSubscriptionRegistry = $subscriptionRegistry->newSubscriptionRegistry($subscriptionRegistryData);

                            if($saveSubscriptionRegistry){
                                return redirect()->route('site.home', ['success' => true, 'message' => 'Usuário salvo com sucesso!']);
                            }
                        }
                    }
                }
            }
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
