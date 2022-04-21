@extends('master.layout')

@section('title')
IT World
@endsection

@section('content')
<!-- ================= Main ================= -->
<div class="container-fluid">
    <div class="row justify-content-evenly">
        <!-- ================= Sidebar ================= -->
        <div class="col-lg-3">
            <div class="d-none d-lg-block w-100 h-100 overflow-hidden scrollbar rounded" style="max-width: 360px; z-index: 4">
                <ul class="navbar-nav fixed mt-4 ms-3 d-flex flex-column pb-5 mb-5" style="padding-top: 56px">
                    <!-- top -->
                    <!-- avatar -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                            <div class="p-2">
                                <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            </div>
                            <div>
                                <p class="m-0">Cat</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ================= Timeline ================= -->
        <div class="col-12 col-lg-9 pb-5">
            <div class="d-flex flex-column justify-content-center w-100 mx-auto" style="padding-top: 56px;
            max-width: 680px">
                <!-- posts -->
                <!-- p 1 -->
                <div class="bg-white p-4 rounded mt-3">
                    <!-- author -->
                    <div class="d-flex justify-content-between">
                        <!-- avatar -->
                        <div class="d-flex">
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            <div>
                                <p class="m-0 fw-bold">Cat</p>
                                <span class="text-muted fs-7">July 17 at 1:23 pm</span>
                            </div>
                        </div>
                        <!-- edit -->
                        <i class="fas fa-ellipsis-h" type="button" id="post1Menu" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <!-- edit menu -->
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1Menu">
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item d-flex justify-content-around align-items-center fs-7" href="#">Edit Post</a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item d-flex justify-content-around align-items-center fs-7" href="#">Delete Post</a>
                            </li>
                        </ul>
                    </div>
                    <!-- post content -->
                    <div class="mt-3">
                        <!-- content -->
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Quae fuga incidunt consequatur tenetur doloremque officia
                                corrupti provident tempore vitae labore?
                            </p>
                            <img src="https://source.unsplash.com/random/12" alt="post image" class="img-fluid rounded" />
                        </div>
                        <!-- likes & comments -->
                        <div class="post__comment mt-3 position-relative">
                            <!-- comment & like bar -->
                            <div class="d-flex justify-content-around">
                                <div class="dropdown-item rounded d-flex justify-content-center align-items-center pointer text-muted p-1">
                                    <i class="fas fa-thumbs-up me-3"></i>
                                    <p class="m-0">Upvote</p>
                                </div>
                                <div class="dropdown-item rounded d-flex justify-content-center align-items-center pointer text-muted p-1">
                                    <i class="fas fa-thumbs-down me-3"></i>
                                    <p class="m-0">Downvote</p>
                                </div>
                                <div class="dropdown-item rounded d-flex justify-content-center align-items-center pointer text-muted p-1" data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1">
                                    <i class="fas fa-comment-alt me-3"></i>
                                    <p class="m-0">Comment</p>
                                </div>
                            </div>
                            <!-- comment expand -->
                            <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <hr />
                                <div class="accordion-body">
                                    <!-- comment 1 -->
                                    <div class="d-flex align-items-center my-1">
                                        <!-- avatar -->
                                        <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 38px;
                                        height: 38px;
                                        object-fit: cover;" />
                                        <!-- comment text -->
                                        <div class="p-3 rounded comment__input w-100">
                                            <!-- comment menu of author -->
                                            <div class="d-flex justify-content-end">
                                                <!-- icon -->
                                                <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <!-- menu -->
                                                <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                                                    <li class="d-flex align-items-center">
                                                        <a class="dropdown-item d-flex justify-content-around align-items-center fs-7" href="#">Edit Comment</a>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <a class="dropdown-item d-flex justify-content-around align-items-center fs-7 " href="#">Delete Comment</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="fw-bold m-0">Cat</p>
                                            <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- comment 2 -->
                                    <div class="d-flex align-items-center my-1">
                                        <!-- avatar -->
                                        <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="width: 38px;
                                        height: 38px;
                                        object-fit: cover;" />
                                        <!-- comment text -->
                                        <div class="p-3 rounded comment__input w-100">
                                            <p class="fw-bold m-0">Jerry</p>
                                            <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- create comment -->
                                    <form class="d-flex my-1">
                                        <!-- avatar -->
                                        <div>
                                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 38px;
                                            height: 38px;
                                            object-fit: cover;" />
                                        </div>
                                        <!-- input -->
                                        <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                                    </form>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection