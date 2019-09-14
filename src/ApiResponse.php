<?php

namespace Meet\ApiResponse;

class ApiResponse
{
    /**
     * static property for error response
     *
     * @var array
     */
    public static $errorResponse = array();


    /**
     * static property for success response
     *
     * @var array
     */
    public static $successResponse = array();


    /**
     * static method for error response
     *
     * @param string $message
     * @param string $status
     * @param integer $code
     * @param [type] $data
     * @return void
     */
    public static function getError(
        $message = 'you got an error.',
        $status = 'error',
        $code = 500,
        $data = null
    ) {
        // try {
        self::$errorResponse['error']['message'] = $message;
        self::$errorResponse['error']['status'] = $status;
        self::$errorResponse['error']['code'] = $code;
        $data != null ? self::$errorResponse['error']['data'] = $data : null;
        return self::$errorResponse;
        // } catch (Exception $e) {
        //     throw new Exception("Something wrong with package.");
        // }
    }


    /**
     * static method to get success response
     *
     * @param [type] $data
     * @param string $status
     * @param string $message
     * @param integer $code
     * @return void
     */
    public static function getResult(
        $data = null,
        $status = 'Ok',
        $message = 'you got what you needed.',
        $code = 200
    ) {
        // try {
        self::$successResponse['Success']['status'] = $status;
        self::$successResponse['Success']['code'] = $code;
        self::$successResponse['Success']['message'] = $message;
        self::$successResponse['Success']['data'] = $data;
        return self::$successResponse;
        // } catch (Exception $e) {
        //     throw new Exception("Something wrong with package.");
        // }
    }
}
