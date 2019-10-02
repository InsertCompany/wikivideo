{% extends "layouts/index.html" %}

{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}
{% block content %}
    <div class="container-fluid my-5">
        <div class="container text-center">
            <h1 class="mt-3 text-center">Titulo do curso</h1>
            <div class="row d-flex justify-content-center my-2">
                <div class="col-12">
                    <h4>Progresso do curso</h4>
                </div>
                <div class="col-md-11">
                    <div class="course-progress progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-md-1">
                    <p>50%</p>
                </div>
            </div><!-- div.row !-->
            <hr>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="accordion" id="videosOutline">
                    <div class="card">
                        <div class="card-header" id="heading1">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Capitulo 1</button>
                        </div>
                        <div class="collapse show" id="collapse1" aria-labelledby="heading1" data-parent="#videosOutline">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading2">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapse2">Capitulo 2</button>
                        </div>
                        <div class="collapse" id="collapseOne" aria-labelledby="heading2" data-parent="#videosOutline">
                            <div class="card-body">
                                <ul>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                    <li class="my-3"><a href="#">Aula N - Nome da Aula</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-12">
                    <h4 class="text-center my-3">Titulo do capitulo   -   Aula 2</h4>
                </div>
                <div class="col-12">
                    <div class="player-video embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/Yf8fovqWp_s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
      
    </div><!--div.container-->
{% endblock %}