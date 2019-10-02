{% extends "layouts/index.html" %}

{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}
{% block content %}
<div class="container">
    <h1 class="my-3 text-center">Titulo do curso</h1>
    <div class="row d-flex justify-content-center">
        <div class="">
            <div class="container-stars">
                <span>
                    <i class="fas fa-star"></i>
                </span>
                <span>
                    <i class="far fa-star"></i>
                </span>
                <span>
                    <i class="far fa-star"></i>
                </span>
                <span>
                    <i class="far fa-star"></i>
                </span>
                <span>
                    <i class="far fa-star"></i>
                </span>
            </div>
        </div>
    </div>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{base_url}}">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{base_url}}courses">Cursos</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{base_url}}course?id=">Curso</a></li>
    </ol>
    </nav>
</div>
<hr>
<div class="course my-5 container">
    <div class="row">
        <div class="col-9">
            <div class="course-details">
                <img class="course-details-img">
                <h3 class="mt-5">Descrição:</h3>
                <p>Sed justo dui, ornare ut consectetur a, fringilla nec justo. Nunc tellus turpis, dictum at sollicitudin in, blandit sit amet eros. Cras posuere odio urna, ut hendrerit elit commodo non. Sed rhoncus lectus nec finibus bibendum. Integer convallis metus et quam eleifend efficitur. Maecenas et ultrices libero, eget mollis nulla. Suspendisse mi eros, finibus nec convallis nec, scelerisque ut nulla. Nunc consectetur facilisis neque eget bibendum. Curabitur rutrum enim sapien, ut pellentesque nibh iaculis et. Donec faucibus imperdiet sapien, pretium dignissim ligula scelerisque non. Donec a sem ut arcu ullamcorper rhoncus et pulvinar nibh.</p>
                <div class="course-outline mt-5">
                    <h3 class=>Linha de tempo do curso</h3>
                    <div class="accordion">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Capitulo 1</button>
                            </div>
                            <div class="collapse show" id="collapse1" aria-labelledby="heading1">
                                <div class="card-body">
                                    <ul>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapse2">Capitulo 1</button>
                            </div>
                            <div class="collapse" id="collapseOne" aria-labelledby="heading1">
                                <div class="card-body">
                                    <ul>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                        <li class="my-3">Aula N - Nome da Aula</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-coments">
                    <h3 class="text-center">Avaliações</h3>
                    <div class="coments mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-text">
                                    <p>nulla eros mattis augue, et semper urna augue ac justo. Curabitur sed erat ac leo viverra suscipit. Maecenas eget ipsum eros. Nulla scelerisque orci a gravida tempor. In pharetra sem tortor, ac dictum nisl lobortis id.</p>
                                </div>
                                <div class="mb-3">
                                    <div class="container-stars">
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="far fa-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="row">
                                        <div class="col-2">
                                            <img class="comment-autor-img" src="{{base_url}}public/img/user.png">
                                        </div>
                                        <div class="col-10">
                                            <p>Nome do autor</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <p class="col-12">00/00/0000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>
        </div>
        <div class="col-3 text-center">
            <div class="d-flex justify-content-center"><img class="course-details-author-img" src="{{base_url}}public/img/user.png"></div>
            <h3>Nome do autor</h3>
            <h5>Data da postagem</h5>
            <h5>Quantidade de matriculas</h5>
            
            <a href="" class="btn btn-primary btn-block">Matricular-se</a>
        </div>
    <img>
   
</div>

{% endblock %}