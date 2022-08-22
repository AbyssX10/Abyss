<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./views/components/head.php"; ?>
    <link rel="stylesheet" href="./views/es/home/home.css">
    <title>Jose Luis Salinas | Desarrollador Web</title>
</head>

<body class="flex">
    <div class="sidebar">
        <div class="box flex-column column">
            <div class="banner box">
                <img src="https://piratebrowser.com/wp-content/uploads/2021/03/web-developer-scaled.jpg" alt="Foto" class="photo">
                <p class="box-10-5px center author">Jose Luis Salinas</p>
                <p class="box-10-5px center"><b>DESARROLLADOR WEB</b> EN COLOMBIA</p>
            </div>
            <hr>
            <nav class="box">
                <ul class="box">
                    <li>
                        <a href="#inicio" data-section="inicio" class="box box-10-5px flex active">
                            <div class="icon center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                            </div>
                            <p class="center">Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="#acerca" data-section="acerca" class="box box-10-5px flex">
                            <div class="icon center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                            <p class="center">Sobre mí</p>
                        </a>
                    </li>
                    <li>
                        <a href="#servicios" data-section="servicios" class="box box-10-5px flex">
                            <div class="icon center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-table" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8796a1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="16" height="16" rx="2" />
                                    <line x1="4" y1="10" x2="20" y2="10" />
                                    <line x1="10" y1="4" x2="10" y2="20" />
                                </svg>
                            </div>
                            <p class="center">Servicios</p>
                        </a>
                    </li>
                    <li>
                        <a href="#habilidades" data-section="habilidades" class="box box-10-5px flex">
                            <div class="icon center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tool" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8796a1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
                                </svg>
                            </div>
                            <p class="center">Habilidades</p>
                        </a>
                    </li>
                    <li>
                        <a href="#educacion" data-section="educacion" class="box box-10-5px flex">
                            <div class="icon center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg>
                            </div>
                            <p class="center">Educacion</p>
                        </a>
                    </li>
                    <li>
                        <a href="#experiencia" data-section="experiencia" class="box box-10-5px flex">
                            <div class="icon center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8796a1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="15" cy="15" r="3" />
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                                    <line x1="6" y1="9" x2="18" y2="9" />
                                    <line x1="6" y1="12" x2="9" y2="12" />
                                    <line x1="6" y1="15" x2="8" y2="15" />
                                </svg>
                            </div>
                            <p class="center">Experiencia</p>
                        </a>
                    </li>
                    <li>
                        <a href="#proyectos" data-section="proyectos" class="box box-10-5px flex">
                            <div class="icon center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-briefcase" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8796a1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="3" y="7" width="18" height="13" rx="2" />
                                    <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                    <line x1="12" y1="12" x2="12" y2="12.01" />
                                    <path d="M3 13a20 20 0 0 0 18 0" />
                                </svg>
                            </div>
                            <p class="center">Proyectos</p>
                        </a>
                    </li>
                    <li>
                        <a href="#contacto" data-section="contacto" class="box box-10-5px flex">
                            <div class="icon center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                            </div>
                            <p class="center">Contacto</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <hr>
            <p class="box copyright">
                All rights reserved &copy; <?php echo date("Y"); ?> | This website is made with
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                </svg>
                by <b>Jose Luis Salinas</b>
            </p>
        </div>
    </div>

    <div class="content">
        <div id="inicio" class="container section">
            <h1>Inicio</h1>
        </div>
        <div id="acerca" class="container section">
            <h1>Acerca</h1>
        </div>
        <div id="servicios" class="container section">
            <h1>Servicios</h1>
        </div>
        <div id="habilidades" class="container section">
            <h1>Habilidades</h1>
        </div>
        <div id="educacion" class="container section">
            <h1>Educacion</h1>
        </div>
        <div id="experiencia" class="container section">
            <h1>Experiencia</h1>
        </div>
        <div id="proyectos" class="container section">
            <h1>Proyectos</h1>
        </div>
        <div id="contacto" class="container section">
            <h1>Contacto</h1>
        </div>
    </div>

    <?php require_once "./views/components/scripts.php"; ?>
</body>

</html>