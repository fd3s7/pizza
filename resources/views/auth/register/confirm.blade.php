@extends('template.auth')

@section('title', '新規登録確認')

@section('css')
<link rel="stylesheet" href="/css/pages/index.css" media="all" title="no title">
<link rel="stylesheet" href="/css/auth/register/index.css" media="all" title="no title">
@endsection

@section('js')
<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
<script src="/js/common/autokana/jquery.autoKana.js" language="javascript" type="text/javascript"></script>
@endsection

@section('main')
<div class="container">
  <div class="text-center">
    <h1>新規会員登録確認</h1>
  </div>

    <div class="row">
                    <form role="form" method="POST" action="{{ url('/register/complete') }}">
                        {{ csrf_field() }}
                        <table class="table table-responcive">
                         <tbody>
                          <tr>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <th><label for="name">氏名<font class="red">※</font></label></th>
                        <td class="form-inline">
                              <h4>{{ $data['name'] }}</h4>
                        </td>
                   </div>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('kana') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
               <tr>
                    </td>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('pref') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
               <tr>
                    <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                        </td>
                   </div>
               </tr>
        </tbody>
 </table>
