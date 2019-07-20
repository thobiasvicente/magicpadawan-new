@extends('layouts.app')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{asset('img/bg25.jpg')}}');background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 pt-5 ">
                <div class="card">
                    <div class="card-header card-header-danger text-center">Minha Conta</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success mt-3" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <h2 class="text-center title text-dark">Bem Vindo ao Magic PadaWan!</h2>
                                <h4 class="text-center description">Muito Obrigado por se registrar! Nosso site ainda está em fase de criação.</h4>
                                <h4 class="text-center description">Mas aproveitando que você chegou até aqui, poderia preencher o formulario abaixo, nos contando mais sobre seu perfil?</h4>
                                <h4 class="text-center description">Essas informações serão necessarias para orgarnizarmos nossos campeonatos :)</h4>
                                <form class="contact-form">
                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            <div class="form-group bmd-form-group">
                                                <label class="label-control bmd-label-static">Qual o melhor dia e horário da semana para você jogar?</label>
                                                <input type='text' class="form-control" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">Sou Novato
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 ml-auto mr-auto text-center mt-5">
                                            <button class="btn btn-danger text-center">
                                                <i class="fa fa-paper-plane"></i> Enviar!
                                                <div class="ripple-container"></div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection