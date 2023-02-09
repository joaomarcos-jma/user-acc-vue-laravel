<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Validator, Log};

class AuthService
{

    protected $user;

    /**
     * AuthService constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function login($request)
    {

        try {
            $request = Request::create('/oauth/token', 'POST', [
                'grant_type' => 'password',
                'client_id' => config('services.passport_client.id'),
                'client_secret' => config('services.passport_client.secret'),
                'username' => $request->username,
                'password' => $request->password,
            ]);

            $attempt = app()->handle($request);

            if ($attempt->getStatusCode() !== Response::HTTP_OK) {
                return response()->json([
                    'success' => false,
                    'errors' => $attempt->getStatusCode(),
                    'message' => 'Usuário ou Senha Inválidos!'
                ], $attempt->getStatusCode());
            }

            return response()->json([
                'success' => true,
                'result' => json_decode($attempt->getContent()),
                'status' => Response::HTTP_OK
            ]);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            Log::info(_('error_operation'));
        }
    }

    /**
     * @param $request
     * @return mixed
     */
    public function logout($request)
    {
        try {

            $revoked = $request->user()->token()->revoke();
            return Response::custom('logout_success', $revoked, Response::HTTP_OK);
        } catch (\Exception $exception) {
            Log::info(_('error_operation'));
            Log::error($exception->getMessage());
            return Response::custom('error_operation', $exception);
        }
    }
}
