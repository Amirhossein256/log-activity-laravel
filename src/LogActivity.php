<?php

namespace Amirhossein256\LogActivity;

use Amirhossein256\LogActivity\Models\Log;

class LogActivity
{

    /**
     * save Log data On database
     *
     * @param $action
     * @param $user_id
     * @param $status
     * @param $payload |nullable
     * @param $response |nullable
     * @return bool
     */
    protected function save($action, $user_id, $status, $payload = null, $response = null)
    {

        Log::create([
            'action' => $action,
            'user_id' => $user_id,
            'status' => $status,
            'payload' => $payload,
            'response' => $response,
        ]);

        return true;
    }

    public function info($user_id, $status, $payload = null, $response = null)
    {

        return $this->save(__FUNCTION__, $user_id, $status, $payload, $response);
    }

    public function error($user_id, $status, $payload = null, $response = null)
    {

        return $this->save(__FUNCTION__, $user_id, $status, $payload, $response);
    }

    public function alert($user_id, $status, $payload = null, $response = null)
    {

        return $this->save(__FUNCTION__, $user_id, $status, $payload, $response);
    }
}
