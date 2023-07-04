<?php

const SELECT_EMPTY_ADMIN_NAME = [10001, '管理员登录名不能为空'];

const SELECT_EMPTY_MENU = [20001, '菜单信息不存在'];

class ResponseException {

}

class PaasException extends ResponseException{
    public static function error($msg='error', $code = 500) {

    }
}