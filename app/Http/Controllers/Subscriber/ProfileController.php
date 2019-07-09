<?php

namespace App\Http\Controllers\Subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subscriber.profile.index');
    }

    public function edit()
    {
        $states = State::orderby('name', 'asc')->get();
        return view('subscriber.profile.edit', compact('states'));
    }

    public function update(Request $request){
        $data = $request->all();
        $userData = [];
        $userData['name']     = $data['name'];
        $userData['email']    = $data['email'];
        $userData['password'] = $data['password'];

        $userBd = User::where('email', $data['email'])->whereNot('id', $data['user_id'])->get()->first(); //verifica se existe o email de novo usuário no banco 
        if (!$userBd){
            $user = new User;
            $idNewUser = $user->updateUser($userData);
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
                        $subscriber = new Subscriber;
                        $saveSubscriber = $subscriber->newSubscriber($subscriberData);
                        
                        if($saveSubscriber){
                            $subscriptionRegistryData['person_id'] = $idNewPerson[0];
                            $subscriptionRegistryData['subscription_plan_id'] = $data['subscription_plan_id'];
                            $subscriptionRegistryData['status'] = 1; 
                            $subscriptionRegistryData['expires_in'] = "30/07/2019";
                            $subscriptionRegistry = new SubscriptionRegistry;
                            $saveSubscriptionRegistry = $subscriptionRegistry->newSubscriptionRegistry($subscriptionRegistryData);

                            if($saveSubscriptionRegistry){
                                return redirect()->route('subscriber.profile', ['success' => true, 'message' => 'Usuário salvo com sucesso!']);
                            }
                        }
                    }
                }
            }
        }
    }
}
