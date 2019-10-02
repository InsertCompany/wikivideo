{% extends "layouts/index.html" %}

{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}
{% block content %}
    <div class="container my-5">
        <h4 class="text-center mb-4">Seja bem vindo {{fullname}}</h4>
        <div class="row mx-auto">
            <div class="col-md-2">
                <div class="aside-menu btn-group-vertical btn-block">
                    <a href="{{base_url}}dashboard" class="btn btn-block btn-primary">Inicio</a>
                    <a href="{{base_url}}dashboard/my-courses" class="btn btn-block btn-primary">Meus cursos</a>
                    <a href="{{base_url}}dashboard/my-profile" class="btn btn-block btn-primary">Meu Perfil</a>
                </div>
            </div><!-- div.col-md-2 -->
            <div class="col-md-10 ml-0">
                <div class="row">
                    <div class="col-12 mb-3">
                        <form class="form-inline col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Titulo do curso">
                            </div>
                            <div class="form-group ml-2">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Todos</option>
                                    <option>Concluido</option>
                                    <option>Sem concluir</option>
                                </select>
                            </div>
                            <input type="submit" class="ml-2 btn btn-md btn-primary">
                        </form>
                    </div>
                    <div class="col-12">

                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row card-course-header text-center">
                                <h5 class="card-title col-12 col-md-12">Titulo do curso</h5>
                                <p class="col-12 col-md-12">Categoria do curso</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Progresso do curso</h5>
                                </div>
                                <div class="col-md-11">
                                    <div class="course-progress progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p>50%</p>
                                </div>
                            </div>
                            <p>DLorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat semper volutpat. Ut fringilla ultricies ultricies. Nunc imperdiet, nisl quis faucibus aliquet.</p>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-12 col-md-2"><img class="course-author-img"></div>
                                    <div class="col-12 col-md-10">
                                        <label>Nome Professor</label>
                                    </div>
                                </div>
                            </div><!-- div.d-flex-->
                            <a href="{{base_url}}course?id=" class="btn btn-block btn-primary">Acessar curso</a>
                        </div><!-- div.card-body-->
                    </div><!-- div.card -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row card-course-header text-center">
                                <h5 class="card-title col-12 col-md-12">Titulo do curso</h5>
                                <p class="col-12 col-md-12">Categoria do curso</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Progresso do curso</h5>
                                </div>
                                <div class="col-md-11">
                                    <div class="course-progress progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p>50%</p>
                                </div>
                            </div>
                            <p>DLorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat semper volutpat. Ut fringilla ultricies ultricies. Nunc imperdiet, nisl quis faucibus aliquet.</p>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-12 col-md-2"><img class="course-author-img"></div>
                                    <div class="col-12 col-md-10">
                                        <label>Nome Professor</label>
                                    </div>
                                </div>
                            </div><!-- div.d-flex-->
                            <a href="{{base_url}}course?id=" class="btn btn-block btn-primary">Acessar curso</a>
                        </div><!-- div.card-body-->
                    </div><!-- div.card -->
                </div><!-- div.row -->
                <div>
                    <nav>
                        <ul class="pagination d-flex justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active "><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul><!-- ul.pagination -->
                    </nav><!-- nav -->
                </div>
            </div><!-- div.col-md-10-->
        </div><!-- div.row -->
    </div><!--div.container-->
{% endblock %}