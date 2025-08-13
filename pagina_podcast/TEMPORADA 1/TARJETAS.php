<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crehabits Podcasts - Grid Personalizado</title>
    <!-- GOOGLE FONTS - ROKKIT LIGHT + FREDOKA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkit:wght@300;400;500&family=Fredoka:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div id="podcasts-grid-container">
    <!-- HEADER CON BOTÓN VOLVER Y TÍTULO -->
    <div class="page-header">
        <a href="https://crehabits.co/2360-2/" class="back-button">
            ← Volver a las temporadas
        </a>
        <h1 class="season-title">TEMPORADA 1</h1>
    </div>
    
    <!-- BUSCADOR -->
    <div class="search-container" style="text-align: center; margin-bottom: 30px;">
        <input type="text" 
               id="podcast-search" 
               placeholder="🔍 Buscar episodio por título o descripción..." 
               style="padding: 15px 25px; font-size: 16px; border: 2px solid #e2e8f0; border-radius: 25px; width: 100%; max-width: 500px; outline: none; transition: all 0.3s ease;">
    </div>
    
    <!-- GRID DE PODCASTS -->
    <div id="podcasts-grid" class="podcasts-grid">
        <div class="loading-podcasts" style="text-align: center; padding: 40px; color: #666; grid-column: 1/-1;">
            <h3 style="color: #667eea; margin-bottom: 10px;">🎧 Cargando episodios de Crehabits...</h3>
            <p>Los podcasts aparecerán aquí en unos segundos</p>
        </div>
    </div>
    
    <!-- PAGINACIÓN -->
    <div id="pagination-container" class="pagination-container">
        <!-- Los botones de paginación se generan automáticamente -->
    </div>
</div>

<style>
/* ESTILOS PARA EL HEADER CON BOTÓN VOLVER Y TÍTULO */
.page-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 50px;
    padding: 0 20px;
    position: relative;
}

.back-button {
    background: linear-gradient(135deg, #01587a 0%, #2c5aa0 100%);
    color: white;
    text-decoration: none;
    padding: 12px 20px;
    border-radius: 8px;
    font-family: 'Rokkit', serif;
    font-weight: 400;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(1, 88, 122, 0.3);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
    flex-shrink: 0;
}

.back-button:hover {
    background: linear-gradient(135deg, #014d66 0%, #1e3a8a 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(1, 88, 122, 0.4);
    text-decoration: none;
    color: white;
}

.season-title {
    font-family: 'Fredoka', cursive;
    font-weight: 600;
    font-size: 3.5rem;
    color: #2c5aa0;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    text-shadow: 0 2px 4px rgba(44, 90, 160, 0.2);
}

/* RESPONSIVE PARA EL HEADER */
@media (max-width: 768px) {
    .page-header {
        flex-direction: column;
        align-items: center;
        gap: 20px;
        padding: 0 15px;
        margin-bottom: 40px;
    }
    
    .season-title {
        font-size: 2.8rem;
        position: static;
        transform: none;
        letter-spacing: 2px;
        order: 2;
    }
    
    .back-button {
        font-size: 0.8rem;
        padding: 10px 16px;
        order: 1;
        align-self: flex-start;
    }
}

@media (max-width: 480px) {
    .season-title {
        font-size: 2.2rem;
        letter-spacing: 1px;
    }
    
    .back-button {
        font-size: 0.75rem;
        padding: 8px 14px;
    }
}

/* ESTILOS PARA PAGINACIÓN */
.pagination-container {
    margin-top: 40px;
    text-align: center;
    padding: 20px 0;
}

.pagination-buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}

.page-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    padding: 12px 18px;
    border-radius: 8px;
    cursor: pointer;
    font-family: 'Rokkit', serif;
    font-weight: 400;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    min-width: 50px;
}

.page-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
}

/* SOLO LOS NÚMEROS DE PÁGINAS CON EL AZUL ESPECIAL */
.page-btn:not(.prev-btn):not(.next-btn):not(.current-page) {
    background: #5cb3c1;
    color: white;
    box-shadow: 0 4px 15px rgba(92, 179, 193, 0.3);
}

.page-btn:not(.prev-btn):not(.next-btn):not(.current-page):hover {
    background: #4a9cb0;
    box-shadow: 0 6px 20px rgba(92, 179, 193, 0.5);
}

.page-btn.current-page {
    background: #f2b900 !important;
    color: white !important;
    box-shadow: 0 4px 15px rgba(242, 185, 0, 0.4);
    font-weight: 600;
    transform: scale(1.1);
}

.page-btn.current-page:hover {
    transform: scale(1.1);
    background: #f2b900 !important;
}

.page-btn.prev-btn,
.page-btn.next-btn {
    background: linear-gradient(135deg, #01587a 0%, #2c5aa0 100%);
    padding: 12px 20px;
    font-weight: 500;
}

.page-btn.prev-btn:hover,
.page-btn.next-btn:hover {
    background: linear-gradient(135deg, #014d66 0%, #1e3a8a 100%);
}

.page-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    transform: none;
}

.page-btn:disabled:hover {
    transform: none;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

/* RESPONSIVE PARA PAGINACIÓN */
@media (max-width: 600px) {
    .pagination-buttons {
        gap: 8px;
    }
    
    .page-btn {
        padding: 10px 14px;
        font-size: 0.8rem;
        min-width: 40px;
    }
    
    .page-btn.prev-btn,
    .page-btn.next-btn {
        padding: 10px 16px;
        font-size: 0.8rem;
    }
    
    /* OCULTAR ALGUNOS NÚMEROS EN MÓVIL SI HAY MUCHAS PÁGINAS */
    .pagination-container {
        margin-top: 30px;
        padding: 15px 0;
    }
}

/* ESTILOS PARA EL GRID CON COLORES DE FONDO */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f0f4f8;
}

.podcasts-grid {
    display: grid;
    grid-template-columns: repeat(4, 0.545fr); /* 10% más ancho: 0.495 * 1.1 = 0.545fr */
    gap: 35px 65px; /* Separación horizontal reducida para dar más espacio */
    margin-top: 30px;
    padding: 0 15px;
}

.podcast-card {
    border-radius: 0; /* COMPLETAMENTE CUADRADO - era 8px */
    padding: 15px 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
    cursor: pointer;
    text-decoration: none;
    display: block;
    position: relative;
    overflow: hidden;
    min-height: 172px;
    color: #2c5aa0;
    max-width: 265px;
    margin: 0 auto;
}

/* MARCO INTERNO CUADRADO DENTRO DE LA TARJETA - LÍNEA MÁS DELGADA */
.podcast-card::after {
    content: '';
    position: absolute;
    top: 8px;
    left: 8px;
    right: 8px;
    bottom: 8px;
    border: 1px solid rgba(44, 90, 160, 0.6); /* MÁS DELGADO: 1px en lugar de 2px */
    border-radius: 0; /* COMPLETAMENTE CUADRADO */
    pointer-events: none;
    z-index: 1;
}

.podcast-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
    text-decoration: none;
}

/* COLORES EXACTOS ESPECIFICADOS CON MARCO INTERNO DELGADO */
.podcast-card.color-1 {
    background: #5cb3c1;
    color: #2c5aa0;
}

.podcast-card.color-1::after {
    border-color: rgba(44, 90, 160, 0.7);
    border-width: 1px; /* LÍNEA DELGADA */
}

.podcast-card.color-2 {
    background: #01587a;
    color: white;
}

.podcast-card.color-2::after {
    border-color: rgba(255, 255, 255, 0.5);
    border-width: 1px; /* LÍNEA DELGADA */
}

.podcast-card.color-3 {
    background: #f2b900;
    color: #2c5aa0;
}

.podcast-card.color-3::after {
    border-color: rgba(44, 90, 160, 0.7);
    border-width: 1px; /* LÍNEA DELGADA */
}

.podcast-card.color-4 {
    background: #99d8dd;
    color: #2c5aa0;
}

.podcast-card.color-4::after {
    border-color: rgba(44, 90, 160, 0.7);
    border-width: 1px; /* LÍNEA DELGADA */
}

/* CONTENIDO SOBRE EL MARCO INTERNO */
.custom-image-container,
.duration-tag,
.episode-title-exact,
.decorative-line {
    position: relative;
    z-index: 2;
}
.custom-image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
    height: 240px;
    position: relative;
    margin-top: -2px;
}

.custom-image {
    width: 270px;
    height: 270px;
    object-fit: contain;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    /* SIN SOMBRAS NI EFECTOS */
}

/* PLACEHOLDER PARA IMAGEN - REDUCIDO 20% ADICIONAL */
.image-placeholder {
    width: 157px; /* 20% menos: 196 * 0.8 = 157px */
    height: 157px; /* 20% menos: 196 * 0.8 = 157px */
    border-radius: 0;
    background: transparent;
    border: 2px dashed rgba(255, 255, 255, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px; /* Reducido proporcionalmente */
    text-align: center;
    color: rgba(255, 255, 255, 0.6);
    font-weight: bold;
    /* SIN SOMBRAS NI EFECTOS */
}

.podcast-card.color-2 .image-placeholder {
    color: rgba(255, 255, 255, 0.7);
    border-color: rgba(255, 255, 255, 0.3);
}

/* ETIQUETA DURACIÓN - REEMPLAZA HORARIOS */
.duration-tag {
    background: #2c5aa0;
    color: white;
    padding: 5px 15px;
    border-radius: 3px; /* MUY POQUITO REDONDEADO */
    font-size: 0.7rem;
    font-weight: 400;
    font-family: 'Rokkit', serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: inline-block;
    position: absolute;
    top: 238px; /* 8PX MÁS ABAJO - era 230px */
    left: 15px;
    z-index: 3;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

/* COLOR 1: AZUL OSCURO */
.podcast-card.color-1 .duration-tag {
    background: #01587a;
    color: white;
}

/* COLOR 2: AMARILLO DORADO */
.podcast-card.color-2 .duration-tag {
    background: #f2b900;
    color: white;
}

/* COLOR 3: AZUL CLARO */
.podcast-card.color-3 .duration-tag {
    background: #5cb3c1;
    color: white;
}

/* COLOR 4: AZUL CLARO (IGUAL QUE COLOR 3) */
.podcast-card.color-4 .duration-tag {
    background: #5cb3c1;
    color: white;
}

/* TÍTULO DEL EPISODIO - MÁXIMO DOS LÍNEAS CON BUEN ESPACIADO */
.episode-title-exact {
    font-size: 0.75rem; /* TAMAÑO INTERMEDIO */
    font-weight: 300;
    font-family: 'Rokkit', serif;
    text-transform: uppercase;
    line-height: 1.3; /* MÁS ESPACIADO ENTRE LÍNEAS */
    margin-bottom: 12px; /* MÁS ESPACIO ABAJO */
    margin-top: 25px;
    text-align: left;
    letter-spacing: 0.3px;
    display: -webkit-box; /* CONTROL DE LÍNEAS */
    -webkit-line-clamp: 2; /* MÁXIMO 2 LÍNEAS */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 2.6em; /* ALTURA PARA 2 LÍNEAS */
}

.podcast-card.color-2 .episode-title-exact {
    color: white;
}

/* LÍNEA DECORATIVA - MÁS LARGA */
.decorative-line {
    width: 80px; /* MÁS LARGA - era 45px */
    height: 3px;
    background: #2c5aa0;
    margin: 0;
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.podcast-card.color-2 .decorative-line {
    background: #F4C430;
}

.podcast-card.color-3 .decorative-line {
    background: #2c5aa0;
}

/* BUSCADOR - CON ROKKIT */
.search-container input:focus {
    border-color: #7CC7D0 !important;
    box-shadow: 0 0 0 3px rgba(124, 199, 208, 0.2) !important;
    outline: none;
}

.search-container input {
    font-family: 'Rokkit', serif; /* ROKKIT PARA EL BUSCADOR */
    font-weight: 300; /* LIGHT */
}

/* RESPONSIVE */
@media (max-width: 1200px) {
    .podcasts-grid {
        grid-template-columns: repeat(3, 0.545fr);
        gap: 30px 55px;
        padding: 0 10px;
    }
}

@media (max-width: 900px) {
    .podcasts-grid {
        grid-template-columns: repeat(2, 0.545fr);
        gap: 25px 45px;
        padding: 0 5px;
    }
    
    .podcast-card {
        padding: 12px 10px; /* Padding vertical reducido */
        min-height: 196px; /* 15% menos: 231 * 0.85 = 196px */
        max-width: 230px;
    }
    
    .custom-image-container {
        height: 99px; /* 15% menos: 116 * 0.85 = 99px */
        margin-bottom: 8px;
        margin-top: 0px;
    }
    
    .custom-image,
    .image-placeholder {
        width: 94px; /* 15% menos: 110 * 0.85 = 94px */
        height: 94px; /* 15% menos: 110 * 0.85 = 94px */
    }
    
    .image-placeholder {
        font-size: 12px;
    }
    
    .episode-title-exact {
        font-size: 0.75rem;
        font-family: 'Rokkit', serif;
        font-weight: 300;
        text-align: left; /* ALINEADO A LA IZQUIERDA EN RESPONSIVE */
    }
    
    .duration-tag {
        font-size: 0.65rem;
        font-family: 'Rokkit', serif;
        font-weight: 400;
        padding: 4px 10px;
        border-radius: 3px; /* MANTENER EL REDONDEO EN RESPONSIVE */
        margin-top: -10px; /* SUBIR MUCHO EN RESPONSIVE - era -3px */
        margin-bottom: 12px; /* MÁS ESPACIO EN RESPONSIVE */
    }
    
    .decorative-line {
        margin: 0; /* ALINEADA A LA IZQUIERDA EN RESPONSIVE */
    }
    
    .search-container input {
        width: 90% !important;
    }
}

@media (max-width: 600px) {
    .podcasts-grid {
        grid-template-columns: 0.545fr;
        gap: 20px;
        padding: 0 5px;
    }
    
    .podcast-card {
        margin: 0 auto;
        max-width: 210px;
        min-height: 180px; /* Más compacto en móvil */
    }
}

/* =========================
   OVERRIDE PARA MÓVIL: 2 COLUMNAS
   (Se agrega al final sin borrar nada)
   ========================= */
@media (max-width: 600px) {
    /* 2 columnas por fila en móvil */
    .podcasts-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 14px 14px !important;
        padding: 0 10px !important;
    }
    /* Que las tarjetas usen todo el ancho de su columna */
    .podcast-card {
        max-width: none !important;
        width: 100% !important;
        min-height: 170px !important;
        padding: 12px 10px !important;
    }
    /* Ajuste de imagen para que quepa bien en 2 col */
    .custom-image-container {
        height: 120px !important;
        margin-bottom: 8px !important;
    }
    .custom-image,
    .image-placeholder {
        width: 120px !important;
        height: 120px !important;
    }
    /* Mover la etiqueta para que no se solape */
    .duration-tag {
        position: static !important; /* quita absolute en móvil */
        display: inline-block !important;
        margin: 6px 0 8px 0 !important;
        top: auto !important;
        left: auto !important;
        box-shadow: none !important;
    }
    /* Línea decorativa y título compactos */
    .episode-title-exact {
        font-size: 0.8rem !important;
        margin-top: 6px !important;
        margin-bottom: 8px !important;
    }
    .decorative-line {
        width: 60px !important;
        height: 3px !important;
    }
}
</style>

<script>
// BASE DE DATOS DE PODCASTS CREHABITS - TODOS LOS 53 EPISODIOS
const gridPodcastDatabase = [
    {
        id: 1,
        title: "Estrés: ¿Una enfermedad?",
        description: "Bienvenidos al primer podcast de Crehabits, en este episodio queremos exponer nuestro punto de vista sobre el nivel de estrés en que estamos inmersos los seres humanos, esto gracias al estilo de vida tan frenético que llevamos. Sin embargo, cabe aclarar que no todo el estrés es malo y aquí verás las razones por las que en ocasiones nos resulta útil y/o adaptativo.",
        spotifyId: "3avJmn8LjOWuQPcdO6PCPS",
        duration: "20:24"
    },
    {
        id: 2,
        title: "Ansiedad ¿Se puede controlar?",
        description: "Desde una perspectiva diferente abordaremos uno de los temas de los que más comúnmente se habla en el día a día, a través de los diferentes medios de comunicación. Los Psicólogos Julieth Reyes y Camilo Cartagena explicaran cómo la ansiedad hace parte de nosotros de manera adaptativa y el papel que éste desempeña en el ser humano.",
        spotifyId: "4W0OKeHKgbh1Qxz4qJyta7", // ⚠️ AGREGA EL ID REAL
        duration: "21:31"
    },
    {
        id: 3,
        title: "El perdón en la familia. Parte 1",
        description: "En este episodio contamos con una invitada especial, ella es Tatiana Vargas, psicóloga y cuyo interés y praxis son las terapias de familia, en este podcast hablaremos sobre la importancia de perdonar, con énfasis en la familia y los beneficios que esto trae en nuestra vida, para poder sanar y avanzar.",
        spotifyId: "1tmBCCRZMuKZmdzldbuoVu", // ⚠️ AGREGA EL ID REAL
        duration: "22:31"
    },
    {
        id: 4,
        title: "El perdón en la familia. Parte 2",
        description: "Continuamos con Tatiana Vargas hablando sobre la importancia de perdonar, con énfasis en la familia y los beneficios que esto trae en nuestra vida, para poder sanar y avanzar. En esta parte veremos qué hacer si la persona que me ha ofendido lo sigue haciendo y cómo saber si lo he logrado.",
        spotifyId: "18gLtE1nwqtZTeaJkiCXVN", // ⚠️ AGREGA EL ID REAL
        duration: "25:45"
    },
    {
        id: 5,
        title: "Estrés vs. Ansiedad",
        description: "Este episodio intentará delimitar las diferencias entre el estrés y la ansiedad adaptativos y a su vez evidenciar aquellas similitudes que fácilmente nos llevan a confundirlos. Esperamos que a partir de ahora puedas reconocerlos y ayudar a otros a identificarlos.",
        spotifyId: "2U5vHQNOdZwc7RFU5751tJ", // ⚠️ AGREGA EL ID REAL
        duration: "17:31"
    },
    {
        id: 6,
        title: "Psicología y música ¿Existe relación entre sí? (1)",
        description: "Oscar Marin psicólogo y músico será el encargado de sumergirnos en el encantador mundo psicológico que existe detrás de la música, contándonos cómo hace parte del ser humano incluso desde antes de nacer. ¿Conoces los efectos que provoca la música en el cuerpo?",
        spotifyId: "544hmrde0bxoBvDjofPxQW", // ⚠️ AGREGA EL ID REAL
        duration: "24:19"
    },
    {
        id: 7,
        title: "Psicología y música ¿Existe relación entre sí? (2)",
        description: "Continuamos con Oscar Marin explorando el mundo psicológico de la música. En esta parte veremos los aportes de la música al ser humano para su desarrollo emocional, beneficios a nivel cognitivo en memoria, automotivación, control, aprendizaje y físico.",
        spotifyId: "5kf6PLU8b10Dnfipf7HPgA", // ⚠️ AGREGA EL ID REAL
        duration: "25:38"
    },
    {
        id: 8,
        title: "¿Crianza positiva o permisiva?",
        description: "Este episodio te llevará a una reconceptualización de lo que es la crianza positiva, en ocasiones los padres pueden llegar a ser permisivos y desde afuera lo notamos mucho más fácil, sin embargo no quiere decir que un padre permisivo este aplicando la crianza positiva.",
        spotifyId: "4xIZcVoWNAVN3dHYIeCNl7", // ⚠️ AGREGA EL ID REAL
        duration: "27:36"
    },
    {
        id: 9,
        title: "TEA, una condición de vida. Parte 1",
        description: "El Trastorno del Espectro Autista es una condición de vida con la cual muchas personas aprenden a vivir. ¿Cuáles son las causas? ¿Qué conductas están marcadas en este trastorno? ¿Cuál es su prevalencia? ¿Desde que edad se puede hablar de un diagnóstico?",
        spotifyId: "6DQVNWxtB4V4jtvYRTTc8K", // ⚠️ AGREGA EL ID REAL
        duration: "31:07"
    },
    {
        id: 10,
        title: "TEA, una condición de vida. Parte 2",
        description: "Continuamos hablando del Trastorno del Espectro Autista. Hablaremos de la importancia del diagnóstico a tiempo es tan fundamental como el plan de intervención de manera individualizada según los requerimientos de cada niño/niña o adulto.",
        spotifyId: "0phQz1i4lpKr9N6LIHxBX2", // ⚠️ AGREGA EL ID REAL
        duration: "30:41"
    },
    {
        id: 11,
        title: "El duelo migratorio te reinventa",
        description: "No existe otra situación durante la vida donde se vivan tantas pérdidas a la vez como cuando migramos, despedirse de la familia, amigos, paisajes, cultura, lugares, comidas, incluso de tu profesión puede llevar a sacar una nueva versión de ti.",
        spotifyId: "1uJPRPAUJvKt66qqj5bZC0", // ⚠️ AGREGA EL ID REAL
        duration: "36:00"
    },
    {
        id: 12,
        title: "Comunicación en la pareja",
        description: "Dale play a este episodio y no te arrepentirás, junto a nuestra colega Tatiana Vargas hemos tomado de referencia el libro 'Los hombres son de Marte y la mujeres de Venus' para hablar sobre la gran diferencia que existe en la comunicación femenina y masculina.",
        spotifyId: "0ijsiF8wDNENyaLSmrd8Fe", // ⚠️ AGREGA EL ID REAL
        duration: "39:36"
    },
    {
        id: 13,
        title: "Cómo diferenciar la tristeza de la depresión",
        description: "Durante este capítulo hablaremos de la depresión y la tristeza, dejando entrever esas diferencia que existen entre ellas y la importancia que significa conocerlas, ya que eso implica que al identificar un cuadro depresivo se tomarán las acciones pertinentes.",
        spotifyId: "1OAXsl9eXQKoQabb0fmnL4", // ⚠️ AGREGA EL ID REAL
        duration: "19:03"
    },
    {
        id: 14,
        title: "Gestión emocional",
        description: "Los psicólogos de Crehabits crean un pequeño debate en torno a las diferencias que tienen las emociones primarias y secundarias en nuestro procesamiento de información, como se ve la falta de gestión emocional y la importancia de saber identificar, manejar, predecir nuestras emociones.",
        spotifyId: "2SF2yk2RXqMwSJ22yH9kiR", // ⚠️ AGREGA EL ID REAL
        duration: "28:52"
    },
    {
        id: 15,
        title: "Trastorno Obsesivo Compulsivo (TOC)",
        description: "Escucha este episodio y sorpréndete con dos ejemplos que nos trae el psicólogo Camilo Cartagena de lo que piensa y siente una persona con TOC. Además veremos que es una compulsión, como son las obsesiones y lo que realmente pasa cuando estas dos características se unen.",
        spotifyId: "3F3rgXQXuzOKxCW1tfaydC", // ⚠️ AGREGA EL ID REAL
        duration: "20:41"
    },
    {
        id: 16,
        title: "Dependencia emocional y el otro extremo",
        description: "¿Podemos ser dependientes emocionales y siquiera notarlo? Este es de los temas de salud mental de los que más se suele hablar, ya que te hace pensar en retrospectiva, evaluar diferentes aspectos de tu vida y darte cuenta que te puedes estar fallando.",
        spotifyId: "32JJk2WihK4vWIafWAk2RD", // ⚠️ AGREGA EL ID REAL
        duration: "21:13"
    },
    {
        id: 17,
        title: "Mitos sobre sexualidad",
        description: "Bienvenidos a este episodio donde hablamos de las posibles razones por las que es sexo continua siendo un tabú en la actualidad. Y si quieres conocer algunos de los mitos más intrigantes quédate para así descubrir que tan ciertos son.",
        spotifyId: "5gXMbMGVpqMrxLtVUyeW4v", // ⚠️ AGREGA EL ID REAL
        duration: "19:41"
    },
    {
        id: 18,
        title: "Pataletas, una gran oportunidad",
        description: "Las pataletas además de ser incómodas, están muy mal vistas parecen ser sinónimo de descontrol, mal comportamiento, incluso de manipulación. Te invito a escuchar este episodio y darte la oportunidad de hacer las cosas mejor con tu hijo o hija.",
        spotifyId: "4RbaKcQVxIDemEPmWNppIG", // ⚠️ AGREGA EL ID REAL
        duration: "20:48"
    },
    {
        id: 19,
        title: "Mindfulness: vivir aquí, vivir ahora",
        description: "¿Realmente eres consciente de tu respiración? primero que nada, ¿sabes respirar? Bienvenidos a este episodio, juntos veremos la importancia no solo de la respiración sino de vivir conscientemente en nuestra cotidianidad y apreciar los pequeños detalles.",
        spotifyId: "0xR9PR8JmxKh3ZWvG5FrOK", // ⚠️ AGREGA EL ID REAL
        duration: "23:12"
    },
    {
        id: 20,
        title: "Redes sociales y autoestima parte 1",
        description: "En la actualidad las redes sociales hacen parte de nuestra vida, lo que era una herramienta más de comunicación se ha convertido en un sin número de componentes que cada día hace que las tomemos más en cuenta en nuestra vida, en este episodio hablamos sobre la influencia que ejercen en el autoestima.",
        spotifyId: "71q6Bh3kFeHV8NHfqJQTK6", // ⚠️ AGREGA EL ID REAL
        duration: "30:23"
    },
    {
        id: 21,
        title: "Redes sociales y autoestima parte 2",
        description: "Continuamos hablando sobre la influencia que ejercen las redes sociales en el autoestima, pero ¿Cómo proteger nuestra autoestima? ¿Cómo proteger a los más vulnerables? Descubre estrategias prácticas en este episodio.",
        spotifyId: "6FeTarXLSeYQxp9EKpx16L", // ⚠️ AGREGA EL ID REAL
        duration: "20:55"
    },
    {
        id: 22,
        title: "Hablemos de ego",
        description: "'El ego es un monstruo fascinante' dice Alanis Morissette, esta frase describe muy bien el ego, no quieras quitarte el ego porque el mismo deseo de quitártelo ya es geocéntrico. Exploramos este fascinante tema en profundidad.",
        spotifyId: "1ET8lQh4sj7FpdjjqeYWby", // ⚠️ AGREGA EL ID REAL
        duration: "18:46"
    },
    {
        id: 23,
        title: "Límites, dejar de fallarnos",
        description: "Los límites son una delgada línea entre lo que permito o no que suceda en mi espacio para mantenerlo seguro, pero ¿por qué nos cuesta tanto imponerlos? no solo a los demás sino a nosotros mismos. Dale click a este episodio y descubre esto y mucho más.",
        spotifyId: "1X1HhPbckxUV10EUognTlE", // ⚠️ AGREGA EL ID REAL
        duration: "25:07"
    },
    {
        id: 24,
        title: "La familia como primera escuela",
        description: "Este entretenido episodio nos brinda una perspectiva muy amplia de cómo la adultez se ve influida por la infancia individual con referencia a todas esas enseñanzas que tienen que ver con valores, acompañamiento, vínculos.",
        spotifyId: "7Cm7MUPPT9fHWv6XMmGGij", // ⚠️ AGREGA EL ID REAL
        duration: "35:00"
    },
    {
        id: 25,
        title: "Primeros Auxilios Psicológicos (PAP)",
        description: "¿Alguna vez has estado en una situación donde quisieras hacer más por esa persona que lo está pasando muy mal? Los PAP son clave para el futuro de la persona afectada, pueden prevenir el desarrollo de trastornos como por ejemplo Trastorno de estrés postraumático.",
        spotifyId: "1spxL2sf5ZvESyGAXI9rn8", // ⚠️ AGREGA EL ID REAL
        duration: "34:26"
    },
    {
        id: 26,
        title: "Depresión Leve y Mayor",
        description: "La depresión es una de las enfermedades que más causan muertes a nivel mundial, el primer paso para combatirla es aceptarla y reconocerla, dale click a este episodio y conoce que es la depresión, cuales son sus síntomas, la diferencia entre depresión leve y mayor.",
        spotifyId: "11TYEbNDGMTJIhbhjhuNRM", // ⚠️ AGREGA EL ID REAL
        duration: "21:52"
    },
    {
        id: 27,
        title: "Ghosting, Pocketing y más denominaciones a las relaciones",
        description: "Este episodio es algo así como un glosario de palabras que se consideran tendencia ahora mismo, especialmente hacen referencia a las distintas dinámicas en las relaciones o en un intento por entablar relaciones de pareja.",
        spotifyId: "0aLn004bDwnKZtPVDsV3pd", // ⚠️ AGREGA EL ID REAL
        duration: "27:02"
    },
    {
        id: 28,
        title: "Bien ido 2023 & Bienvenido 2024",
        description: "Aquellas cosas que nos enseño el 2023 y dar ese cierre tan esperado por muchos, mientras se desea un 2024 de crecimiento, propósitos cumplidos y más salud mental.",
        spotifyId: "2squCodVtFodUy9nWXu6OT", // ⚠️ AGREGA EL ID REAL
        duration: "20:19"
    },
    {
        id: 29,
        title: "TAG más allá de la ansiedad",
        description: "En este episodio los psicólogos Julieth Reyes y Camilo Cartagena hablan sobre los síntomas, causas y todas aquellas características, que además, nos llevan a lograr diferenciar cuando se trata de un Trastorno de Ansiedad Generalizada o de la ansiedad que surge ante situaciones demandantes.",
        spotifyId: "4D3XyKcSY3vPsQUAX4cagJ", // ✅ YA TIENES ESTE
        duration: "19:37"
    },
    {
        id: 30,
        title: "Apego seguro y ansioso ambivalente",
        description: "¿Qué es el apego? ¿Desde donde surge? ¿Cómo influye en la vida? ¿Cómo podemos ver el tipo de apego en niños y adultos? Estas y otras respuestas las encontrarás en estos 20 minutos, dale click y aprende con nosotros.",
        spotifyId: "7hOGmV2GEmENWcxOuvk8CU", // ⚠️ AGREGA EL ID REAL
        duration: "19:27"
    },
    {
        id: 31,
        title: "Apego evitativo y desorganizado",
        description: "Tras escuchar los 4 tipos de apegos, podemos descubrir la manera de vínculo que aprendiste en tu niñez, no queremos culpar a nuestro padres de lo que hacemos y sentimos hoy, por el contrario es la oportunidad de cambiar la mirada, modificar conductas.",
        spotifyId: "2otTqO6TYzM6rFOLYKvD4Z", // ⚠️ AGREGA EL ID REAL
        duration: "19:51"
    },
    {
        id: 32,
        title: "Los 5 lenguajes del amor",
        description: "Los psicólogos Julieth Reyes, Tatiana Vargas y Camilo Cartagena abordan un tema del que en la actualidad se habla mucho y tal vez se aplica poco. Entender, comprender y amar a los demás a través de los lenguajes del amor.",
        spotifyId: "4J4miDJ3l8TAcl0re9mn4i", // ⚠️ AGREGA EL ID REAL
        duration: "37:23"
    },
    {
        id: 33,
        title: "En busca de la autoestima",
        description: "Da click en este episodio y descubre la autoestima desde un enfoque que te llevará por un viaje de autoconocimiento y en búsqueda de esa estima que, por situaciones, personas o determinados momentos de nuestro día a día vamos perdiendo.",
        spotifyId: "3la4Jb17e5nbQFlkOenoq4", // ⚠️ AGREGA EL ID REAL
        duration: "25:24"
    },
    {
        id: 34,
        title: "¿Qué hay detrás del amor propio?",
        description: "Cuando nos damos amor, cuando alimentamos cada parte de nosotros de amor se nota, en cada aspecto de nuestra vida se ve reflejado. El amor propio significa algo completamente diferente para cada persona.",
        spotifyId: "6GJ4XJYDELYfvuisiNLeeF", // ⚠️ AGREGA EL ID REAL
        duration: "20:52"
    },
    {
        id: 35,
        title: "Los auto's que tienes (no son coches de lo que hablamos)",
        description: "La mayoría del tiempo no estamos dispuestos a descubrirnos, y más aún cuando eso que guardamos duele, pero lo cierto es que debemos conocernos y conocer el poder que tiene entender cómo interactúan pensamientos, emociones y comportamiento.",
        spotifyId: "2sTUhlLzr8vCVxpr5GLpvV", // ⚠️ AGREGA EL ID REAL
        duration: "29:30"
    },
    {
        id: 36,
        title: "Qué difícil es aceptar el NO",
        description: "Entendemos que para lograr decir no primero debemos aceptar un NO como respuesta, tener claro que así como no estamos obligados a decir SI, las demás personas tampoco están disponibles o dispuestas siempre.",
        spotifyId: "7mh9tbxvaE19yjwYvks7zm", // ⚠️ AGREGA EL ID REAL
        duration: "19:09"
    },
    {
        id: 37,
        title: "Ataques de pánico, perder el control",
        description: "El testimonio de una persona que ha sufrido ataques de pánico ha inspirado este episodio, nos cuenta cómo se sienten y también cómo ha logrado manejarlos, te invitamos a escucharlo, entender y abrazar a todas las personas que pasan por esto.",
        spotifyId: "2lB4GDs70LkZtqi6lBmL9f", // ⚠️ AGREGA EL ID REAL
        duration: "16:11"
    },
    {
        id: 38,
        title: "El poder del amor en la crianza",
        description: "El amor tiene un impacto muy grande en la vida de todos los seres humanos, es un sentimiento que todos queremos experimentar porque nos hace sentir cosas muy lindas. Ahora imaginen el poder que tiene este sentimiento al llevarlo a la crianza de los niños.",
        spotifyId: "4zDD7ZrlM0l91sZUQe0Nii", // ⚠️ AGREGA EL ID REAL
        duration: "16:19"
    },
    {
        id: 39,
        title: "Los 5 pilares de una relación sana",
        description: "Amar es de las cosas más maravillosas que vivimos los seres humanos, pero que bonito se hace cuando es sano, recíproco, cuando hay bases sólidas, cuando se trabaja cada día para poder fortalecer la relación.",
        spotifyId: "39IXb2xxfCWhPkT4dzjUlm", // ⚠️ AGREGA EL ID REAL
        duration: "25:01"
    },
    {
        id: 40,
        title: "¿Se puede ser amigo del ex?",
        description: "Seguramente has llegado a este episodio tras preguntarte si existe la posibilidad de tener una relación de amistad con alguien con quien tuviste una relación de pareja, pues para ser pareja deberíamos pasar por ese filtro de amigo previo.",
        spotifyId: "2WV2Qkz4GMUcTSPQtcDjRt", // ⚠️ AGREGA EL ID REAL
        duration: "40:46"
    },
    {
        id: 41,
        title: "Inteligencia Emocional, comprensión y gestión de tu mundo interior",
        description: "El concepto de inteligencia emocional parece ser complejo pero aquí te lo explicamos de la manera más sencilla posible, te planteamos ejemplos donde no te queda otra opción que entenderlo.",
        spotifyId: "6qcHLdnzsTTUKzqDBBym5m", // ⚠️ AGREGA EL ID REAL
        duration: "21:28"
    },
    {
        id: 42,
        title: "TCA, más allá de un ideal",
        description: "En los Trastornos de la Conducta Alimentaria la influencia que ejerce la sociedad tanto para provocar como para reforzarlos es incalculable, este episodio de principio a fin es una 'cápsula vitamina' ya que desde la psicoeducación buscamos más empatía.",
        spotifyId: "69AdEjsBfnwFUrtqNgFli1", // ⚠️ AGREGA EL ID REAL
        duration: "30:35"
    },
    {
        id: 43,
        title: "¿Cómo crear un hábito?",
        description: "¿Por qué nos cuesta tanto hacernos amigos de un nuevo hábito? la cuestión es que no queremos el proceso, lo que queremos es el resultado, ahí caemos en el error de la inmediatez... pero dale click a este episodio y escucha todo lo que tenemos para contarte.",
        spotifyId: "6xozPJKzcl5Wc3YCoUxka5", // ⚠️ AGREGA EL ID REAL
        duration: "29:20"
    },
    {
        id: 44,
        title: "Síndrome del Nido Vacío",
        description: "Este episodio de hoy nos invita a la reflexión familiar, a la identificación de cada una de esas situaciones que empiezan a suceder cuando los hijos se van de casa y las repercusiones positivas o negativas que esto tiene para los padres o cuidadores.",
        spotifyId: "7sVX1C5Kl1rIJDPlB6enSV", // ⚠️ AGREGA EL ID REAL
        duration: "26:16"
    },
    {
        id: 45,
        title: "Agorafobia: mi casa, mi lugar seguro",
        description: "Tener miedo al miedo nos impide atravesarlo y al no hacerlo nos va ganando más terreno al punto de arrinconarnos en nuestra propia casa. ¿Te imaginas querer tener el control de todo fuera de ella?",
        spotifyId: "5YDvVPmlVdug2vlqhDt1Mo", // ⚠️ AGREGA EL ID REAL
        duration: "18:30"
    },
    {
        id: 46,
        title: "Viviendo con dislexia",
        description: "Pasamos desapercibido cuantas veces al día usamos la función de leer o escribir porque lo aprendemos desde pequeños y lo hacemos automático día tras día. Sin embargo, hay quienes no logran hacerlo con tanta facilidad.",
        spotifyId: "4nrOznXuOzohRPSacyRb3X", // ⚠️ AGREGA EL ID REAL
        duration: "30:03"
    },
    {
        id: 47,
        title: "Alzheimer, porque no siempre olvidar es bueno",
        description: "¿Qué ocurre en el cerebro cuando hay una demencia? ¿Qué factores contribuyen a padecer esta enfermedad? ¿Puede estar relacionada con nuestros hábitos? Escucharás esto y más durante este episodio.",
        spotifyId: "1EonK5CfP0MnEkMBtTcA25", // ⚠️ AGREGA EL ID REAL
        duration: "29:05"
    },
    {
        id: 48,
        title: "Uso de pantallas en niños",
        description: "Es fundamental que los padres adapten sus esfuerzos en función de las necesidades y capacidades de sus hijos para poder darle el mejor uso posible de las pantallas, realmente sabemos que este es un desafío para todos.",
        spotifyId: "0jUBS39qOtznwnJBSeNpqX", // ⚠️ AGREGA EL ID REAL
        duration: "24:53"
    },
    {
        id: 49,
        title: "Conflictos en pareja ¿Bueno o malo?",
        description: "Las relaciones de pareja siempre son fascinantes, sobre todo con la diversidad que existe, porque claramente dependiendo del tipo de relación que tengas, serán los conflictos que puedan surgir, y por eso en este episodio hablaremos sobre la Resolución de conflictos en pareja.",
        spotifyId: "7hEQM7rds47S8Nbas1O2SE", // ⚠️ AGREGA EL ID REAL
        duration: "24:03"
    },
    {
        id: 50,
        title: "Cómo y cuándo terminar una relación",
        description: "Para cerrar nuestra primera temporada, hemos decidido crear una la serie del desamor, un conjunto de 4 episodios que nos ayudará a comprender un poco más a fondo lo contrario del amor. Este capítulo será útil para ese momento donde el desamor ha llegado a nuestra puerta.",
        spotifyId: "1b7NDSsk5BvVd2jLoAuBVd", // ⚠️ AGREGA EL ID REAL
        duration: "36:45"
    },
    {
        id: 51,
        title: "Contacto cero",
        description: "Este desamor avanza y no nos podemos quedar con las manos cruzadas ¿o si?. Pues durante el contacto cero es mejor que si, que no hagamos nada, NADAA por tener contacto con esa persona .. ya verás lo bien que te sentará.",
        spotifyId: "5xy0nufU5mAqyQeOsQgBtG", // ⚠️ AGREGA EL ID REAL
        duration: "22:47"
    },
    {
        id: 52,
        title: "Duelo por ruptura amorosa",
        description: "A medida que avanza esta serie nos topamos con la parte que más se hace latente ante el desamor, la despedida, el final de un camino conjunto, la respuesta a nuestra honestidad o la del otro… Bienvenidos a la tusa amorosa, como le llamamos en colombia.",
        spotifyId: "5qC717Hmn30wGuoodSm2a1", // ⚠️ AGREGA EL ID REAL
        duration: "38:32"
    },
    {
        id: 53,
        title: "Reconstruyendo la autoestima post ruptura",
        description: "Este episodio es una cápsula vitamina (prácticamente), directa al autoestima que cae cuando el desamor toca a la puerta y la ruptura llega. Recomendadísimo para toda persona que esté atravesando un duelo por ruptura.",
        spotifyId: "7opCNSlvG2bk74TeOnSgJT", // ⚠️ AGREGA EL ID REAL
        duration: "37:10"
    }
];

// CONFIGURACIÓN DEL LOGO - LOGO OFICIAL DE CREHABITS ACTUALIZADO
const LOGO_URL = "http://crehabits.co/wp-content/uploads/2025/08/ChatGPT-Image-12-ago-2025-09_06_07.png";

// CONFIGURACIÓN DE PAGINACIÓN
const EPISODES_PER_PAGE = 12;
let currentPage = 1;
let allPodcasts = [...gridPodcastDatabase]; // ORDEN ORIGINAL: episodio 1 primero
let filteredPodcasts = allPodcasts;

document.addEventListener('DOMContentLoaded', function() {
    console.log('🎧 Iniciando grid personalizado de podcasts Crehabits...');
    
    const gridContainer = document.getElementById('podcasts-grid');
    const searchInput = document.getElementById('podcast-search');
    
    const PODCAST_PAGE_URL = '/podcast-directo/#podcast';
    
    console.log(`📊 Podcasts de Crehabits encontrados: ${gridPodcastDatabase.length}`);
    
    if (!gridContainer) {
        console.error('❌ No se encontró contenedor del grid');
        return;
    }
    
    // Función para generar las tarjetas con colores y paginación
    function generatePodcastCards(podcastsToShow = filteredPodcasts, page = 1) {
        const colors = ['color-1', 'color-2', 'color-3', 'color-4'];
        
        if (podcastsToShow.length === 0) {
            gridContainer.innerHTML = `
                <div style="grid-column: 1/-1; text-align: center; padding: 40px; color: #666;">
                    <h3>🔍 No se encontraron episodios</h3>
                    <p>Intenta con otros términos de búsqueda</p>
                </div>
            `;
            updatePagination(0);
            return;
        }
        
        // CALCULAR EPISODIOS PARA LA PÁGINA ACTUAL
        const startIndex = (page - 1) * EPISODES_PER_PAGE;
        const endIndex = startIndex + EPISODES_PER_PAGE;
        const episodesForPage = podcastsToShow.slice(startIndex, endIndex);
        
        gridContainer.innerHTML = episodesForPage.map((podcast, index) => {
            const colorClass = colors[index % 4];
            
            return `
                <a href="${PODCAST_PAGE_URL}${podcast.id}" 
                   class="podcast-card ${colorClass}"
                   title="Escuchar: ${podcast.title}">
                   
                    <!-- LOGO ÚNICO PARA TODAS LAS TARJETAS -->
                    <div class="custom-image-container">
                        <img src="${LOGO_URL}" alt="Crehabits Logo" class="custom-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="image-placeholder" style="display: none;">LOGO<br><small>Crehabits</small></div>
                    </div>
                    
                    <!-- ETIQUETA DURACIÓN -->
                    <div class="duration-tag">${podcast.duration}</div>
                    
                    <!-- TÍTULO DEL EPISODIO -->
                    <div class="episode-title-exact">${podcast.title}</div>
                    
                    <!-- LÍNEA DECORATIVA -->
                    <div class="decorative-line"></div>
                    
                </a>
            `;
        }).join('');
        
        // ACTUALIZAR PAGINACIÓN
        updatePagination(podcastsToShow.length);
        
        console.log(`✅ Grid personalizado generado - Página ${page} con ${episodesForPage.length} tarjetas`);
    }
    
    // Función para actualizar la paginación
    function updatePagination(totalEpisodes) {
        const paginationContainer = document.getElementById('pagination-container');
        if (!paginationContainer) return;
        
        const totalPages = Math.ceil(totalEpisodes / EPISODES_PER_PAGE);
        
        if (totalPages <= 1) {
            paginationContainer.innerHTML = '';
            return;
        }
        
        let paginationHTML = '<div class="pagination-buttons">';
        
        // BOTÓN ANTERIOR
        if (currentPage > 1) {
            paginationHTML += `
                <button class="page-btn prev-btn" onclick="changePage(${currentPage - 1})">
                    ← Anterior
                </button>
            `;
        }
        
        // BOTONES DE PÁGINAS
        for (let i = 1; i <= totalPages; i++) {
            if (i === currentPage) {
                paginationHTML += `
                    <button class="page-btn current-page">${i}</button>
                `;
            } else {
                paginationHTML += `
                    <button class="page-btn" onclick="changePage(${i})">${i}</button>
                `;
            }
        }
        
        // BOTÓN SIGUIENTE
        if (currentPage < totalPages) {
            paginationHTML += `
                <button class="page-btn next-btn" onclick="changePage(${currentPage + 1})">
                    Siguiente →
                </button>
            `;
        }
        
        paginationHTML += '</div>';
        paginationContainer.innerHTML = paginationHTML;
    }
    
    // Función para cambiar de página
    window.changePage = function(page) {
        currentPage = page;
        generatePodcastCards(filteredPodcasts, currentPage);
        
        // SCROLL SUAVE AL TOP DEL GRID
        document.getElementById('podcasts-grid-container').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
    
    // Función de búsqueda con paginación
    function setupSearch() {
        if (!searchInput) return;
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            if (searchTerm === '') {
                filteredPodcasts = allPodcasts;
            } else {
                filteredPodcasts = allPodcasts.filter(podcast => 
                    podcast.title.toLowerCase().includes(searchTerm) || 
                    podcast.description.toLowerCase().includes(searchTerm)
                );
            }
            
            // RESETEAR A PRIMERA PÁGINA AL BUSCAR
            currentPage = 1;
            generatePodcastCards(filteredPodcasts, currentPage);
            
            console.log(`🔍 Búsqueda: "${searchTerm}" - ${filteredPodcasts.length} resultados`);
        });
    }
    
    // Inicializar todo
    generatePodcastCards(allPodcasts, 1);
    setupSearch();
    
    console.log('✅ Sistema de grid personalizado Crehabits inicializado correctamente');
});
</script>

</body>
</html>