{% extends "layouts/index.html" %}

{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}

{% block content %}
    <div class="container my-5">
        <h4 class="text-center mb-4">Seja bem vindo NOME!</h4>
        <div>
            <div class="row mx-auto">
                <div class="col-md-2">
                    <div class="aside-menu btn-group-vertical btn-block">
                        <a href="{{base_url}}dashboard" class="btn btn-block btn-primary">Inicio</a>
                        <a href="{{base_url}}dashboard/my-courses" class="btn btn-block btn-primary">Meus cursos</a>
                        <a href="{{base_url}}dashboard/my-profile" class="btn btn-block btn-primary">Meu Perfil</a>

                    </div>
                </div>
                <div class="col-md-10 ml-0 dashboard-user">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card m-3">
                                <div class="card-body">
                                    <p class="text-center">Cursos Matriculados</p>
                                    <p class="text-center details-number">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-3">
                                <div class="card-body">
                                    <p class="text-center">Cursos Concluidos</p>
                                    <p class="text-center details-number">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-3">
                                <div class="card-body">
                                    <p class="text-center">Cursos sem concluir</p>
                                    <p class="text-center details-number">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}