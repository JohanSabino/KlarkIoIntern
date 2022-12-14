<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head>
        <base href="" />
        <title>Modal exercise</title>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
        />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" class="href">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link href="bootstrap-modal-carousel.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link
            href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>"
            rel="stylesheet"
            type="text/css"
        />
        <link rel="stylesheet" href="./scripts/lib/bootstrap-datepicker/css/bootstrap-datepicker.css" class="href">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Bitter:wght@300;400;500&display=swap" rel="stylesheet">
        <!--end::Global Stylesheets Bundle-->
        <!-- our custom styles -->
        <!--clear the styles used in each browser on the next codeLine-->
        <link href="styles/main.css?v=<?php echo filemtime('styles/main.css');?>"rel="stylesheet" type="text/css" /> 
        <link href="styles/raw-main.css?v=<?php echo filemtime('styles/raw-main.css');?>"rel="stylesheet" type="text/css"/>
        <!-- our custom styles end-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body
        id="kt_app_body"
        data-kt-app-header-fixed-mobile="true"
        data-kt-app-sidebar-enabled="true"
        data-kt-app-sidebar-fixed="true"
        data-kt-app-sidebar-push-header="true"
        data-kt-app-sidebar-push-toolbar="true"
        data-kt-app-sidebar-push-footer="true"
        data-kt-app-sidebar-stacked="true"
        data-kt-app-toolbar-enabled="true"
        class="app-default"
    >
        <div id="app_container">
            <!-- Begin::your code -->
            <div class="bd-example">
                <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#ModalScrollable">
                    Launch modal
                </button>
            </div>
            
            <!-- End::your code -->
        </div>
        <div class="modal fade" id="ModalScrollable" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">    
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="modal-content">
    <div class="modal-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col d-flex">
                    <div class="p-2">PREVIEW</div>
                    <div class="p-2" id="bheader">
                        <i class="bi bi-ui-checks-grid"></i>Approved
                    </div>
                </div>
                <div class="col">ACTIVITY</div>
            </div>
        </div>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col">
                <div class="row">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <i class="bi bi-facebook"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-instagram"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-github"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-twitter"></i>
                        </li>
                    </ul>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="card" style="width: 100%">
                        <img
                            src="https://i.imgur.com/V5bxDJ7.png"
                            class="card-img-top rounded"
                            alt="..."
                        />
                        <div class="card-body">
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Et dolores aliquam earum
                                sapiente sunt, ipsum molestiae nesciunt quae
                                repudiandae atque temporibus maiores, ea iusto
                                accusamus voluptate eius blanditiis at libero!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <select
                        class="form-select border-0"
                        aria-label="Default select example"
                    >
                        <option selected>Select client</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row mt-5 mb-5">
                    <select
                        class="form-select border-0"
                        aria-label="Default select example"
                    >
                        <option selected>Content type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <img
                                src="./media/p1.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p2.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p3.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p4.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                    </ul>
                </div>
                <!--two ways, however, i prefered carousel, it is more satisfying to see than ul-->
                <div class="row" id="carousel_persons">
                    <div
                        id="carouselExampleControls"
                        class="carousel slide"
                        data-bs-ride="carousel"
                        style="width: 20%"
                    >
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev"
                        >
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#carouselExampleControls2"
                            data-bs-slide="next"
                        >
                            <span
                                class="carousel-control-next-icon2"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group date" data-provide="datetimepicker">
                        <label for="formGroupExampleInput" class="form-label"
                            >Scheduled for:&nbsp</label
                        >
                        <input
                            type="datetime-local"
                            class="form-control"
                            id="datetimepicker"
                        />
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p>Campaign:&nbsp<a href="#">This is our moment!</a></p>
                </div>
            </div>
            <div class="col">
                <div class="message_container">
                    <img src="./media/p1.png" style="width: 50px" alt="" />
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">
                            To everyone
                        </button>
                        <button
                            type="button"
                            class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#"
                                    >To everyone</a
                                >
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="#">To agency</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <textarea
                    name=""
                    id=""
                    cols="35"
                    rows="2"
                    style="resize: none"
                ></textarea>
                <div class="btn-group">
                    <a
                        href="#"
                        class="btn btn-primary active"
                        aria-current="page"
                        ><i class="fa-solid fa-b"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-i"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-u"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-list"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-list-ol"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-paperclip"></i
                    ></a>
                </div>
                <button type="button" class="btn btn-warning">
                    Add comment
                </button>
                <ul>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="fw-bold fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-danger fw-bold">Succesful</span>
                            <span>try again</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="fw-bold fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-danger fw-bold">Succesful</span>
                            <span>try again</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                </ul>
                <div class="comments_box">
                    <div class="d-flex">
                        <img
                            src="./media/p3.png"
                            style="width: 50px; height: 50px"
                            alt=""
                            class="rounded m-2"
                        />
                        <div class="card rounded" id="card_messagebox">
                            <div class="card-title d-flex mb-3">
                                <span class="p-2 fw-bold">Grace Logan</span>
                                <span class="p-2 badge" id="approbadge"
                                    >Approved</span
                                >
                                <span class="text-primary ms-auto p-2"
                                    >2 hours ago</span
                                >
                            </div>
                            <hr />
                            <div class="card-body d-flex" id="textareabox">
                                <textarea
                                    name="comentary_box"
                                    id="textareaint"
                                    cols="30"
                                    rows="1"
                                    placeholder="reply..."
                                    style="
                                        resize: none;
                                        outline: none;
                                        border: none;
                                    "
                                ></textarea>
                                <a href="#" class="btn btn-secundary"
                                    ><i class="fa-solid fa-paperclip"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block">
                    <span class="text-primary">Grace Logan</span>
                    <span>Update scheduling from</span>
                    <span class="fw-bold">2th/jun/2022</span>
                    <span>to</span>
                    <span class="fw-bold">23/jun/2022</span>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p2.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Makula Francis</span>
                            <span class="p-2 badge" id="updatebadge"
                                >Updated</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="d-flex">
                    <img
                        src="./media/p3.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Grace Logan</span>
                            <span class="p-2 badge" id="commentedbadge"
                                >Commented</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <div class="col-12 p-0 p-5">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Impedit blanditiis prov!
                        </div>
                        <div>
                            <div
                                class="btn-toolbar"
                                role="toolbar"
                                aria-label="Toolbar with button groups"
                            >
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i
                                            class="bi bi-chat-left-text-fill"
                                        ></i>
                                    </button>
                                </div>
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex">
                            <img
                                src="./media/p4.png"
                                style="width: 50px; height: 50px"
                                alt=""
                                class="rounded m-2"
                            />
                            <div class="card rounded" id="card_messagebox">
                                <div class="card-title d-flex mb-3">
                                    <span class="p-2 fw-bold"
                                        >Mr. Anderson</span
                                    >
                                    <span class="text-primary ms-auto p-2"
                                        >2 hours ago</span
                                    >
                                </div>
                                <div class="col-12 p-0 p-5">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Impedit blanditiis prov!
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img
                                src="./media/p2.png"
                                style="width: 50px; height: 50px"
                                alt=""
                                class="rounded m-2"
                            />
                            <div class="card rounded" id="card_messagebox">
                                <div class="card-title d-flex mb-3">
                                    <span class="p-2 fw-bold"
                                        >Makula Francis</span
                                    >
                                    <span class="text-primary ms-auto p-2"
                                        >2 hours ago</span
                                    >
                                </div>
                                <div class="col-12 p-0 p-5">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Impedit blanditiis prov!
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p3.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Grace Logan</span>
                            <span class="p-2 badge" id="editedbadge"
                                >Edited caption</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <div>
                            <fieldset id="revisedlegend">
                                <legend class="revisedlegend_div">
                                    Revised Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="previouslegend">
                                <legend class="previouslegend_div">
                                    Previous Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="revisedlegend">
                                <legend class="revisedlegend_div">
                                    Revised Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="previouslegend">
                                <legend class="previouslegend_div">
                                    Previous Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <div
                                class="btn-toolbar"
                                role="toolbar"
                                aria-label="Toolbar with button groups"
                            >
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i
                                            class="bi bi-chat-left-text-fill"
                                        ></i>
                                    </button>
                                </div>
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p2.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Makula Francis</span>
                            <span class="p-2 badge" id="createbadge"
                                >Created</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-secondary m-0 p-0">
        <div class="col d-flex">
            <div class="col d-flex flex-row mb-3" id="content_buttons-footer">
                <button
                    type="button"
                    class="btn btn-outline-dark d-flex"
                    id="buttonicon"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Delete</div>
                </button>
                <button
                    type="button"
                    class="btn btn-outline-dark d-flex"
                    id="buttonicon"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Show</div>
                </button>
            </div>
            <div
                class="col d-flex flex-row-reverse"
                id="content_buttons-footer"
                id="content_buttons-footer"
            >
                <button
                    type="button"
                    class="btn btn-outline-warning d-flex"
                    id="buttonicon3"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Edit</div>
                </button>
                <button
                    type="button"
                    class="btn btn-outline-warning d-flex"
                    id="buttonicon2"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Undo approved</div>
                </button>
            </div>
        </div>
        <div class="col" id="footer_text">
            <input
                type="text"
                class="text col-11"
                placeholder="Add a comment..."
            />
        </div>
    </div>
</div>

                        </div>
                        <div class="carousel-item">
                        <div class="modal-content">
    <div class="modal-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col d-flex">
                    <div class="p-2">PREVIEW</div>
                    <div class="p-2" id="bheader">
                        <i class="bi bi-ui-checks-grid"></i>Approved
                    </div>
                </div>
                <div class="col">ACTIVITY</div>
            </div>
        </div>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col">
                <div class="row">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <i class="bi bi-facebook"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-instagram"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-github"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-twitter"></i>
                        </li>
                    </ul>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="card" style="width: 100%">
                        <img
                            src="https://i.imgur.com/5uoYaku.jpeg"
                            class="card-img-top rounded"
                            alt="..."
                        />
                        <div class="card-body">
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Et dolores aliquam earum
                                sapiente sunt, ipsum molestiae nesciunt quae
                                repudiandae atque temporibus maiores, ea iusto
                                accusamus voluptate eius blanditiis at libero!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <select
                        class="form-select border-0"
                        aria-label="Default select example"
                    >
                        <option selected>Select client</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row mt-5 mb-5">
                    <select
                        class="form-select border-0"
                        aria-label="Default select example"
                    >
                        <option selected>Content type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <img
                                src="./media/p1.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p2.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p3.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p4.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                    </ul>
                </div>
                <!--two ways, however, i prefered carousel, it is more satisfying to see than ul-->
                <div class="row" id="carousel_persons">
                    <div
                        id="carouselExampleControls"
                        class="carousel slide"
                        data-bs-ride="carousel"
                        style="width: 20%"
                    >
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev"
                        >
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#carouselExampleControls2"
                            data-bs-slide="next"
                        >
                            <span
                                class="carousel-control-next-icon2"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group date" data-provide="datetimepicker">
                        <label for="formGroupExampleInput" class="form-label"
                            >Scheduled for:&nbsp</label
                        >
                        <input
                            type="datetime-local"
                            class="form-control"
                            id="datetimepicker"
                        />
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p>Campaign:&nbsp<a href="#">This is our moment!</a></p>
                </div>
            </div>
            <div class="col">
                <div class="message_container">
                    <img src="./media/p1.png" style="width: 50px" alt="" />
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">
                            To everyone
                        </button>
                        <button
                            type="button"
                            class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#"
                                    >To everyone</a
                                >
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="#">To agency</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <textarea
                    name=""
                    id=""
                    cols="35"
                    rows="2"
                    style="resize: none"
                ></textarea>
                <div class="btn-group">
                    <a
                        href="#"
                        class="btn btn-primary active"
                        aria-current="page"
                        ><i class="fa-solid fa-b"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-i"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-u"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-list"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-list-ol"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-paperclip"></i
                    ></a>
                </div>
                <button type="button" class="btn btn-warning">
                    Add comment
                </button>
                <ul>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="fw-bold fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-danger fw-bold">Succesful</span>
                            <span>try again</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="fw-bold fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-danger fw-bold">Succesful</span>
                            <span>try again</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                </ul>
                <div class="comments_box">
                    <div class="d-flex">
                        <img
                            src="./media/p3.png"
                            style="width: 50px; height: 50px"
                            alt=""
                            class="rounded m-2"
                        />
                        <div class="card rounded" id="card_messagebox">
                            <div class="card-title d-flex mb-3">
                                <span class="p-2 fw-bold">Grace Logan</span>
                                <span class="p-2 badge" id="approbadge"
                                    >Approved</span
                                >
                                <span class="text-primary ms-auto p-2"
                                    >2 hours ago</span
                                >
                            </div>
                            <hr />
                            <div class="card-body d-flex" id="textareabox">
                                <textarea
                                    name="comentary_box"
                                    id="textareaint"
                                    cols="30"
                                    rows="1"
                                    placeholder="reply..."
                                    style="
                                        resize: none;
                                        outline: none;
                                        border: none;
                                    "
                                ></textarea>
                                <a href="#" class="btn btn-secundary"
                                    ><i class="fa-solid fa-paperclip"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block">
                    <span class="text-primary">Grace Logan</span>
                    <span>Update scheduling from</span>
                    <span class="fw-bold">2th/jun/2022</span>
                    <span>to</span>
                    <span class="fw-bold">23/jun/2022</span>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p2.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Makula Francis</span>
                            <span class="p-2 badge" id="updatebadge"
                                >Updated</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="d-flex">
                    <img
                        src="./media/p3.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Grace Logan</span>
                            <span class="p-2 badge" id="commentedbadge"
                                >Commented</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <div class="col-12 p-0 p-5">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Impedit blanditiis prov!
                        </div>
                        <div>
                            <div
                                class="btn-toolbar"
                                role="toolbar"
                                aria-label="Toolbar with button groups"
                            >
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i
                                            class="bi bi-chat-left-text-fill"
                                        ></i>
                                    </button>
                                </div>
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex">
                            <img
                                src="./media/p4.png"
                                style="width: 50px; height: 50px"
                                alt=""
                                class="rounded m-2"
                            />
                            <div class="card rounded" id="card_messagebox">
                                <div class="card-title d-flex mb-3">
                                    <span class="p-2 fw-bold"
                                        >Mr. Anderson</span
                                    >
                                    <span class="text-primary ms-auto p-2"
                                        >2 hours ago</span
                                    >
                                </div>
                                <div class="col-12 p-0 p-5">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Impedit blanditiis prov!
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img
                                src="./media/p2.png"
                                style="width: 50px; height: 50px"
                                alt=""
                                class="rounded m-2"
                            />
                            <div class="card rounded" id="card_messagebox">
                                <div class="card-title d-flex mb-3">
                                    <span class="p-2 fw-bold"
                                        >Makula Francis</span
                                    >
                                    <span class="text-primary ms-auto p-2"
                                        >2 hours ago</span
                                    >
                                </div>
                                <div class="col-12 p-0 p-5">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Impedit blanditiis prov!
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p3.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Grace Logan</span>
                            <span class="p-2 badge" id="editedbadge"
                                >Edited caption</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <div>
                            <fieldset id="revisedlegend">
                                <legend class="revisedlegend_div">
                                    Revised Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="previouslegend">
                                <legend class="previouslegend_div">
                                    Previous Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="revisedlegend">
                                <legend class="revisedlegend_div">
                                    Revised Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="previouslegend">
                                <legend class="previouslegend_div">
                                    Previous Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <div
                                class="btn-toolbar"
                                role="toolbar"
                                aria-label="Toolbar with button groups"
                            >
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i
                                            class="bi bi-chat-left-text-fill"
                                        ></i>
                                    </button>
                                </div>
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p2.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Makula Francis</span>
                            <span class="p-2 badge" id="createbadge"
                                >Created</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-secondary m-0 p-0">
        <div class="col d-flex">
            <div class="col d-flex flex-row mb-3" id="content_buttons-footer">
                <button
                    type="button"
                    class="btn btn-outline-dark d-flex"
                    id="buttonicon"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Delete</div>
                </button>
                <button
                    type="button"
                    class="btn btn-outline-dark d-flex"
                    id="buttonicon"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Show</div>
                </button>
            </div>
            <div
                class="col d-flex flex-row-reverse"
                id="content_buttons-footer"
                id="content_buttons-footer"
            >
                <button
                    type="button"
                    class="btn btn-outline-warning d-flex"
                    id="buttonicon3"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Edit</div>
                </button>
                <button
                    type="button"
                    class="btn btn-outline-warning d-flex"
                    id="buttonicon2"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Undo approved</div>
                </button>
            </div>
        </div>
        <div class="col" id="footer_text">
            <input
                type="text"
                class="text col-11"
                placeholder="Add a comment..."
            />
        </div>
    </div>
</div>

                        </div>
                        <div class="carousel-item">
                        <div class="modal-content">
    <div class="modal-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col d-flex">
                    <div class="p-2">PREVIEW</div>
                    <div class="p-2" id="bheader">
                        <i class="bi bi-ui-checks-grid"></i>Approved
                    </div>
                </div>
                <div class="col">ACTIVITY</div>
            </div>
        </div>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col">
                <div class="row">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <i class="bi bi-facebook"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-instagram"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-github"></i>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-twitter"></i>
                        </li>
                    </ul>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="card" style="width: 100%">
                        <img
                            src="https://i.imgur.com/4PponWC.jpeg"
                            class="card-img-top rounded"
                            alt="..."
                        />
                        <div class="card-body">
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Et dolores aliquam earum
                                sapiente sunt, ipsum molestiae nesciunt quae
                                repudiandae atque temporibus maiores, ea iusto
                                accusamus voluptate eius blanditiis at libero!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <select
                        class="form-select border-0"
                        aria-label="Default select example"
                    >
                        <option selected>Select client</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row mt-5 mb-5">
                    <select
                        class="form-select border-0"
                        aria-label="Default select example"
                    >
                        <option selected>Content type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <img
                                src="./media/p1.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p2.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p3.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                        <li class="list-group-item">
                            <img
                                src="./media/p4.png"
                                class="d-block w-100"
                                alt="..."
                            />
                        </li>
                    </ul>
                </div>
                <!--two ways, however, i prefered carousel, it is more satisfying to see than ul-->
                <div class="row" id="carousel_persons">
                    <div
                        id="carouselExampleControls"
                        class="carousel slide"
                        data-bs-ride="carousel"
                        style="width: 20%"
                    >
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev"
                        >
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#carouselExampleControls2"
                            data-bs-slide="next"
                        >
                            <span
                                class="carousel-control-next-icon2"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group date" data-provide="datetimepicker">
                        <label for="formGroupExampleInput" class="form-label"
                            >Scheduled for:&nbsp</label
                        >
                        <input
                            type="datetime-local"
                            class="form-control"
                            id="datetimepicker"
                        />
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p>Campaign:&nbsp<a href="#">This is our moment!</a></p>
                </div>
            </div>
            <div class="col">
                <div class="message_container">
                    <img src="./media/p1.png" style="width: 50px" alt="" />
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">
                            To everyone
                        </button>
                        <button
                            type="button"
                            class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#"
                                    >To everyone</a
                                >
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="#">To agency</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <textarea
                    name=""
                    id=""
                    cols="35"
                    rows="2"
                    style="resize: none"
                ></textarea>
                <div class="btn-group">
                    <a
                        href="#"
                        class="btn btn-primary active"
                        aria-current="page"
                        ><i class="fa-solid fa-b"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-i"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-u"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-list"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-list-ol"></i
                    ></a>
                    <a href="#" class="btn btn-primary"
                        ><i class="fa-solid fa-paperclip"></i
                    ></a>
                </div>
                <button type="button" class="btn btn-warning">
                    Add comment
                </button>
                <ul>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="fw-bold fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-danger fw-bold">Succesful</span>
                            <span>try again</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="text-primary fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-success fw-bold">Succesful</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="w-100">
                            <span class="text-muted fw-bold">System:&nbsp</span>
                            <span>Publishing to&nbsp</span>
                            <span class="fw-bold fst-italic"
                                >Facebook - Batesa Official ></span
                            >
                            <span class="text-danger fw-bold">Succesful</span>
                            <span>try again</span>
                        </div>
                        <div>
                            <span class="text-black-50 fs-8">
                                30 minutes ago</span
                            >
                        </div>
                    </li>
                </ul>
                <div class="comments_box">
                    <div class="d-flex">
                        <img
                            src="./media/p3.png"
                            style="width: 50px; height: 50px"
                            alt=""
                            class="rounded m-2"
                        />
                        <div class="card rounded" id="card_messagebox">
                            <div class="card-title d-flex mb-3">
                                <span class="p-2 fw-bold">Grace Logan</span>
                                <span class="p-2 badge" id="approbadge"
                                    >Approved</span
                                >
                                <span class="text-primary ms-auto p-2"
                                    >2 hours ago</span
                                >
                            </div>
                            <hr />
                            <div class="card-body d-flex" id="textareabox">
                                <textarea
                                    name="comentary_box"
                                    id="textareaint"
                                    cols="30"
                                    rows="1"
                                    placeholder="reply..."
                                    style="
                                        resize: none;
                                        outline: none;
                                        border: none;
                                    "
                                ></textarea>
                                <a href="#" class="btn btn-secundary"
                                    ><i class="fa-solid fa-paperclip"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block">
                    <span class="text-primary">Grace Logan</span>
                    <span>Update scheduling from</span>
                    <span class="fw-bold">2th/jun/2022</span>
                    <span>to</span>
                    <span class="fw-bold">23/jun/2022</span>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p2.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Makula Francis</span>
                            <span class="p-2 badge" id="updatebadge"
                                >Updated</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="d-flex">
                    <img
                        src="./media/p3.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Grace Logan</span>
                            <span class="p-2 badge" id="commentedbadge"
                                >Commented</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <div class="col-12 p-0 p-5">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Impedit blanditiis prov!
                        </div>
                        <div>
                            <div
                                class="btn-toolbar"
                                role="toolbar"
                                aria-label="Toolbar with button groups"
                            >
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i
                                            class="bi bi-chat-left-text-fill"
                                        ></i>
                                    </button>
                                </div>
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex">
                            <img
                                src="./media/p4.png"
                                style="width: 50px; height: 50px"
                                alt=""
                                class="rounded m-2"
                            />
                            <div class="card rounded" id="card_messagebox">
                                <div class="card-title d-flex mb-3">
                                    <span class="p-2 fw-bold"
                                        >Mr. Anderson</span
                                    >
                                    <span class="text-primary ms-auto p-2"
                                        >2 hours ago</span
                                    >
                                </div>
                                <div class="col-12 p-0 p-5">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Impedit blanditiis prov!
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img
                                src="./media/p2.png"
                                style="width: 50px; height: 50px"
                                alt=""
                                class="rounded m-2"
                            />
                            <div class="card rounded" id="card_messagebox">
                                <div class="card-title d-flex mb-3">
                                    <span class="p-2 fw-bold"
                                        >Makula Francis</span
                                    >
                                    <span class="text-primary ms-auto p-2"
                                        >2 hours ago</span
                                    >
                                </div>
                                <div class="col-12 p-0 p-5">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Impedit blanditiis prov!
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p3.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Grace Logan</span>
                            <span class="p-2 badge" id="editedbadge"
                                >Edited caption</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <div>
                            <fieldset id="revisedlegend">
                                <legend class="revisedlegend_div">
                                    Revised Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="previouslegend">
                                <legend class="previouslegend_div">
                                    Previous Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="revisedlegend">
                                <legend class="revisedlegend_div">
                                    Revised Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset id="previouslegend">
                                <legend class="previouslegend_div">
                                    Previous Default
                                </legend>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde repellat laudantium
                                    sit cum, quam voluptatibus voluptas magnam
                                    ratione atque cupiditate. Accusantium totam
                                    assumenda doloribus adipisci in possimus quo
                                    tenetur placeat.
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <div
                                class="btn-toolbar"
                                role="toolbar"
                                aria-label="Toolbar with button groups"
                            >
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i
                                            class="bi bi-chat-left-text-fill"
                                        ></i>
                                    </button>
                                </div>
                                <div
                                    class="btn-group-sm"
                                    role="group"
                                    aria-label="Third group"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                    >
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <img
                        src="./media/p2.png"
                        style="width: 50px; height: 50px"
                        alt=""
                        class="rounded m-2"
                    />
                    <div class="card rounded" id="card_messagebox">
                        <div class="card-title d-flex mb-3">
                            <span class="p-2 fw-bold">Makula Francis</span>
                            <span class="p-2 badge" id="createbadge"
                                >Created</span
                            >
                            <span class="text-primary ms-auto p-2"
                                >2 hours ago</span
                            >
                        </div>
                        <hr />
                        <div class="card-body d-flex" id="textareabox">
                            <textarea
                                class="text-break"
                                name="comentary_box"
                                id="textareaint"
                                cols="30"
                                rows="1"
                                placeholder="reply..."
                                style="
                                    resize: none;
                                    outline: none;
                                    border: none;
                                "
                            ></textarea>
                            <a href="#" class="btn btn-secundary"
                                ><i class="fa-solid fa-paperclip"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-secondary m-0 p-0">
        <div class="col d-flex">
            <div class="col d-flex flex-row mb-3" id="content_buttons-footer">
                <button
                    type="button"
                    class="btn btn-outline-dark d-flex"
                    id="buttonicon"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Delete</div>
                </button>
                <button
                    type="button"
                    class="btn btn-outline-dark d-flex"
                    id="buttonicon"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Show</div>
                </button>
            </div>
            <div
                class="col d-flex flex-row-reverse"
                id="content_buttons-footer"
                id="content_buttons-footer"
            >
                <button
                    type="button"
                    class="btn btn-outline-warning d-flex"
                    id="buttonicon3"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Edit</div>
                </button>
                <button
                    type="button"
                    class="btn btn-outline-warning d-flex"
                    id="buttonicon2"
                >
                    <i class="bi bi-ui-checks-grid"></i>
                    <div class="p-2">Undo approved</div>
                </button>
            </div>
        </div>
        <div class="col" id="footer_text">
            <input
                type="text"
                class="text col-11"
                placeholder="Add a comment..."
            />
        </div>
    </div>
</div>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
        <!--begin::Javascript-->
        <script>
            var hostUrl = 'scripts/lib/uikit/';
        </script>
        <script src="./scripts/lib/jquery.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <script src="bootstrap-modal-carousel.js"/></script/>

        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>

