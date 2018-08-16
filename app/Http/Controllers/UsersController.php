<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UsersController extends Controller
{

//Resource
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //
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

//臉書
    public function fb_login(){
        return "臉書登入";
    }

//用戶資料
    //帳號管理
    public function account_manager_index(){
        return view('users.accountmanager');
    }

    public function account_manager_update(Request $request, $id){
        return "帳號管理_Update";
    }

    //密碼管理
    public function password_manager(){
        return view('users.forgetpassword');
    }

    public function password_no_login(){
        return view('users.onloginforgetpassword');
    }

    //手機號管理
    public function sms_manager_index(){
        return view('users.sms');
    }

    public function sms_manager_update(){

    }

    //通訊錄管理
    public function address_book_index(){
        return view('users.addressbook');
    }

    public function address_book_store(Request $request, $id){
        return "通訊錄管理_Store";
    }

    public function address_book_update(Request $request){
        return "通訊錄管理_Update";
    }

    public function address_book_destroy($id){
        return "通訊錄管理_Destroy";
    }

    //紅利查詢
    public function bonus(){
        return view('users.bonus');
    }

    public function bonus_detail($id){
        return view('users.bonus_detail');
    }

    //公司統編備忘
    public function vat_index(){
        return view('users.vat');
    }

    public function vat_store(Request $request){
        return "公司統編備忘_Stroe";
    }

    public function vat_destroy($id){
        return "公司統編備忘_Destroy";
    }

//訂單相關
    //交易紀錄清單
    public function transaction_list(){
        return view('users.transaction');
    }

    public function transaction_detail($id){
        return view('users.transaction_detail');
    }

    public function transaction_invoice($id){
        return view('users.transaction_invoice');
    }

    //買過商品清單
    public function buy_list(){
        return view('users.buy');
    }

}
