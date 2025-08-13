<!-- IMPORTAR FUENTES GOOGLE -->
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Rokkitt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<div id="podcast-exact-design">
    <!-- CONTENEDOR PRINCIPAL -->
    <div class="main-container">
        
        <!-- COLUMNA IZQUIERDA - CONTENIDO PRINCIPAL -->
        <div class="main-content">
            
            <!-- TÍTULO PRINCIPAL -->
            <h1 id="podcast-title-main" class="main-title">
                ESTRÉS<br>¿UNA ENFERMEDAD?
            </h1>
            
            <!-- REPRODUCTOR DE SPOTIFY -->
            <div id="spotify-container-main" class="spotify-player-container">
                <iframe id="spotify-iframe" 
                        style="border-radius:12px" 
                        src="https://open.spotify.com/embed/episode/3avJmn8LjOWuQPcdO6PCPS?utm_source=generator" 
                        width="100%" 
                        height="232" 
                        frameBorder="0" 
                        allowfullscreen="" 
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                        loading="lazy">
                </iframe>
            </div>
            
            <!-- DESCRIPCIÓN DEL EPISODIO -->
            <div id="podcast-description-main" class="episode-description">
                Bienvenidos al primer podcast de Crehabits, en este episodio queremos hablar desde nuestras perspectiva sobre el nivel de estrés en que estamos inmersos los seres humanos, esto gracias al estilo de vida tan frenético que llevamos. Sin embargo, cabe aclarar que no todo el estrés es malo y aquí verás las razones por las que en ocasiones nos resulta útil y/o adaptativo.
            </div>
            
        </div>
        
        <!-- COLUMNA DERECHA - SIDEBAR -->
        <div class="sidebar">
            
            <!-- SECCIÓN "EN ESTE EPISODIO ENCONTRARÁS" -->
            <div class="episode-info-box">
                <h3>EN ESTE EPISODIO ENCONTRARÁS:</h3>
                <div class="episode-topics">
                    <div id="episode-topics-content">
                        DEFINICIÓN DEL ESTRÉS.
                    </div>
                </div>
            </div>
            
            <!-- SECCIÓN "VER TAMBIÉN..." -->
            <div class="see-also-section">
                <h3>VER TAMBIÉN...</h3>
                
                <!-- LISTA DE OTROS EPISODIOS -->
                <div id="other-episodes-list" class="other-episodes">
                    <!-- Se llena dinámicamente -->
                </div>
                
            </div>
            
        </div>
        
        <!-- NAVEGACIÓN FUERA DEL CUADRO DEL SIDEBAR -->
        <div id="sidebar-navigation" class="sidebar-navigation-outside">
            <!-- Se genera automáticamente -->
        </div>
        
    </div>
    
    <!-- NAVEGACIÓN INFERIOR -->
    <div id="podcast-navigation-main" class="bottom-navigation">
        <!-- Se genera automáticamente -->
    </div>
    
</div>

<style>
/* ESTILOS EXACTOS COMO LA IMAGEN */
#podcast-exact-design {
    background: #01587A;
    min-height: 100vh;
    padding: 20px 20px;
    color: white;
    font-family: 'Rokkitt', serif;
}

.main-container {
    max-width: 1000px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 40px;
    align-items: start;
    padding-top: 0px;
    position: relative;
}

/* COLUMNA IZQUIERDA */
.main-content {
    padding-right: 80px;
    margin-left: -50px;
    margin-top: -10px;
}

.main-title {
    font-family: 'Fredoka', cursive;
    font-size: 2.9rem;
    font-weight: 700;
    color: #FFD700;
    text-transform: uppercase;
    line-height: 1.2;
    margin-bottom: 33px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    letter-spacing: -1px;
    margin-top: -15px;
}

/* ESTILO PARA SEGUNDA LÍNEA BLANCA */
.main-title .second-line {
    color: white;
    display: block;
}

.spotify-player-container {
    margin-bottom: 33px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    max-width: 580px;
}

.episode-description {
    font-family: 'Rokkitt', serif;
    font-size: 1.13rem;
    line-height: 1.6;
    color: #e2e8f0;
    font-weight: 300;
    text-align: center;
    max-width: 580px;
    margin: 0;
    margin-left: 0;
    margin-top: 38px;
}

/* COLUMNA DERECHA - SIDEBAR */
.sidebar {
    background: rgba(255,255,255,0.05);
    border-radius: 15px;
    padding: 19px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    margin-top: -30px;
}

.episode-info-box {
    background: #64b5c3;
    border-radius: 15px;
    padding: 19px;
    margin-bottom: 24px;
    border: none;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    position: relative;
    font-family: 'Fredoka', cursive;
}

.episode-info-box::after {
    content: '';
    position: absolute;
    bottom: -8px;
    right: -8px;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.8);
    border-radius: 15px;
    z-index: -1;
}

.episode-info-box h3 {
    font-family: 'Fredoka', cursive;
    font-size: 0.8rem;
    font-weight: 600;
    color: white;
    text-transform: none;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
    margin-top: 5px;
    text-align: left;
    border-bottom: 1px solid rgba(255,255,255,0.8);
    padding-bottom: 18px;
    white-space: nowrap;
    overflow: hidden;
}

.episode-topics {
    text-align: left;
}

#episode-topics-content {
    font-family: 'Fredoka', cursive;
    font-size: 1.05rem;
    font-weight: 600;
    color: #01587a;
    text-transform: none;
    letter-spacing: 0px;
    line-height: 1.8;
    margin-bottom: 8px;
}

.topic-subtitle-new {
    font-family: 'Fredoka', cursive;
    font-size: 0.9rem;
    color: #01587a;
    font-weight: 400;
    line-height: 1.1;
    display: block;
    margin-top: 8px;
}

.see-also-section h3 {
    font-size: 1.2rem;
    font-weight: bold;
    color: white;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.other-episodes {
    padding-top: 0px;
}

.episode-item {
    display: flex;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
}

.episode-item:hover {
    background: rgba(255,255,255,0.05);
    border-radius: 10px;
    padding-left: 10px;
    padding-right: 10px;
}

.episode-number {
    background: rgba(255,255,255,0.2);
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.episode-details {
    flex: 1;
}

.episode-title-small {
    font-size: 0.95rem;
    font-weight: 600;
    color: white;
    margin-bottom: 5px;
    line-height: 1.3;
}

.episode-duration {
    font-size: 0.8rem;
    color: #a0aec0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.crehabits-label {
    color: #4A90E2;
    font-size: 0.8rem;
    font-weight: 500;
}

/* NAVEGACIÓN INFERIOR - BOTONES SUBIDOS */
.bottom-navigation {
    margin-top: 10px;
    text-align: center;
}

.nav-button {
    background: rgba(255,255,255,0.1);
    border: 2px solid rgba(255,255,255,0.3);
    color: white;
    padding: 15px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    margin: 0 10px;
    display: inline-block;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.nav-button:hover {
    background: rgba(255,255,255,0.2);
    border-color: rgba(255,255,255,0.5);
    transform: translateY(-2px);
    color: white;
    text-decoration: none;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    #podcast-exact-design {
        padding: 15px;
    }
    
    .main-container {
        grid-template-columns: 1fr;
        gap: 20px;
        padding-top: 0;
        display: flex;
        flex-direction: column;
    }
    
    .main-content {
        padding-right: 0;
        margin-left: 0;
        margin-top: 0;
        order: 1;
        display: flex;
        flex-direction: column;
    }
    
    .main-title {
        font-size: 2.2rem;
        text-align: center;
        margin-bottom: 25px;
        margin-top: 0;
        order: 1;
    }
    
    .spotify-player-container {
        order: 2;
        margin-bottom: 25px;
        max-width: 100%;
    }
    
    .episode-description {
        font-size: 0.95rem;
        padding: 0 10px;
        order: 3;
        margin-top: 0;
        text-align: left;
        max-width: 100%;
    }
    
    .sidebar {
        order: 4;
        margin-bottom: 20px;
        margin-top: 20px;
        padding: 15px;
        margin-left: auto;
        margin-right: auto;
        max-width: 320px;
        text-align: center;
    }
    
    .episode-info-box {
        margin-bottom: 20px;
        padding: 15px;
        text-align: center;
    }
    
    .episode-topics {
        text-align: center;
    }
    
    .see-also-section {
        text-align: center;
    }
    
    .see-also-section h3 {
        font-size: 1.1rem;
        margin-bottom: 15px;
        text-align: center;
    }
    
    .episode-item {
        padding: 12px 0;
    }
    
    .episode-title-small {
        font-size: 0.9rem;
        line-height: 1.2;
    }
    
    .episode-number {
        width: 25px;
        height: 25px;
        font-size: 0.8rem;
        margin-right: 12px;
    }
    
    .nav-button {
        display: block;
        margin: 10px auto;
        max-width: 280px;
        text-align: center;
        padding: 12px 20px;
        font-size: 0.9rem;
    }
    
    .bottom-navigation {
        margin-top: 15px;
        order: 5;
    }
}

/* ANIMACIONES */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.main-content, .sidebar {
    animation: fadeIn 0.6s ease-out;
}

.sidebar {
    animation-delay: 0.3s;
}
</style>

<script>
// BASE DE DATOS EXACTA DE PODCASTS CREHABITS
const exactPodcastDatabase = [










{
        id: 1,
        title: "Estrés: ¿Una enfermedad?",
        titleDisplay: "ESTRÉS<br><span class='second-line'>¿UNA ENFERMEDAD?</span>",
        description: "Bienvenidos al primer podcast de Crehabits, en este episodio queremos exponer nuestro punto de vista sobre el nivel de estrés en que estamos inmersos los seres humanos, esto gracias al estilo de vida tan frenético que llevamos. Sin embargo, cabe aclarar que no todo el estrés es malo y aquí verás las razones por las que en ocasiones nos resulta útil y/o adaptativo.",
        topics: "Definición del estrés.<br><span class='topic-subtitle-new'>Cuál es su función en nosotros,<br>como seres humanos.</span>",
        spotifyId: "3avJmn8LjOWuQPcdO6PCPS",
        duration: "20:24"
    },
    {
    id: 2,
    title: "Ansiedad ¿Se puede controlar?",
    titleDisplay: "ANSIEDAD<br><span class='second-line'>¿SE PUEDE CONTROLAR?</span>",
    description: "Desde una perspectiva diferente abordaremos uno de los temas de los que más comúnmente se habla en el día a día, a través de los diferentes medios de comunicación. Los Psicólogos Julieth Reyes y Camilo Cartagena explicaran cómo la ansiedad hace parte de nosotros de manera adaptativa y el papel que éste desempeña en el ser humano.",
    topics: "Control de la ansiedad.<br><span class='topic-subtitle-new'>Perspectiva adaptativa,<br>papel en el ser humano.</span>",
    spotifyId: "4W0OKeHKgbh1Qxz4qJyta7",
    duration: "21:31"
},
{
    id: 3,
    title: "El perdón en la familia. Parte 1",
    titleDisplay: "EL PERDÓN EN LA FAMILIA<br><span class='second-line'>PARTE 1</span>",
    description: "En este episodio contamos con una invitada especial, ella es Tatiana Vargas, psicóloga y cuyo interés y praxis son las terapias de familia, en este podcast hablaremos sobre la importancia de perdonar, con énfasis en la familia y los beneficios que esto trae en nuestra vida, para poder sanar y avanzar.",
    topics: "Importancia del perdón.<br><span class='topic-subtitle-new'>Beneficios para sanar<br>y avanzar en familia.</span>",
    spotifyId: "1tmBCCRZMuKZmdzldbuoVu",
    duration: "22:31"
},
{
    id: 4,
    title: "El perdón en la familia. Parte 2",
    titleDisplay: "EL PERDÓN EN LA FAMILIA<br><span class='second-line'>PARTE 2</span>",
    description: "Continuamos con Tatiana Vargas hablando sobre la importancia de perdonar, con énfasis en la familia y los beneficios que esto trae en nuestra vida, para poder sanar y avanzar. En esta parte veremos qué hacer si la persona que me ha ofendido lo sigue haciendo y cómo saber si lo he logrado.",
    topics: "Estrategias de perdón.<br><span class='topic-subtitle-new'>Manejo de situaciones<br>difíciles continuadas.</span>",
    spotifyId: "18gLtE1nwqtZTeaJkiCXVN",
    duration: "25:45"
},
{
    id: 5,
    title: "Estrés vs. Ansiedad",
    titleDisplay: "ESTRÉS VS.<br><span class='second-line'>ANSIEDAD</span>",
    description: "Este episodio intentará delimitar las diferencias entre el estrés y la ansiedad adaptativos y a su vez evidenciar aquellas similitudes que fácilmente nos llevan a confundirlos. Esperamos que a partir de ahora puedas reconocerlos y ayudar a otros a identificarlos.",
    topics: "Diferencias clave.<br><span class='topic-subtitle-new'>Reconocer y ayudar<br>a identificarlos.</span>",
    spotifyId: "2U5vHQNOdZwc7RFU5751tJ",
    duration: "17:31"
},
{
    id: 6,
    title: "Psicología y música ¿Existe relación entre sí? (1)",
    titleDisplay: "PSICOLOGÍA Y MÚSICA<br><span class='second-line'>¿EXISTE RELACIÓN? (1)</span>",
    description: "Oscar Marin psicólogo y músico será el encargado de sumergirnos en el encantador mundo psicológico que existe detrás de la música, contándonos cómo hace parte del ser humano incluso desde antes de nacer. ¿Conoces los efectos que provoca la música en el cuerpo?",
    topics: "Mundo psicológico musical.<br><span class='topic-subtitle-new'>Efectos en el cuerpo,<br>desde antes de nacer.</span>",
    spotifyId: "544hmrde0bxoBvDjofPxQW",
    duration: "24:19"
},
{
    id: 7,
    title: "Psicología y música ¿Existe relación entre sí? (2)",
    titleDisplay: "PSICOLOGÍA Y MÚSICA<br><span class='second-line'>¿EXISTE RELACIÓN? (2)</span>",
    description: "Continuamos con Oscar Marin explorando el mundo psicológico de la música. En esta parte veremos los aportes de la música al ser humano para su desarrollo emocional, beneficios a nivel cognitivo en memoria, automotivación, control, aprendizaje y físico.",
    topics: "Aportes de la música.<br><span class='topic-subtitle-new'>Desarrollo emocional,<br>beneficios cognitivos.</span>",
    spotifyId: "5kf6PLU8b10Dnfipf7HPgA",
    duration: "25:38"
},
{
    id: 8,
    title: "¿Crianza positiva o permisiva?",
    titleDisplay: "¿CRIANZA POSITIVA<br><span class='second-line'>O PERMISIVA?</span>",
    description: "Este episodio te llevará a una reconceptualización de lo que es la crianza positiva, en ocasiones los padres pueden llegar a ser permisivos y desde afuera lo notamos mucho más fácil, sin embargo no quiere decir que un padre permisivo este aplicando la crianza positiva.",
    topics: "Reconceptualización crianza.<br><span class='topic-subtitle-new'>Diferencias entre positiva<br>y permisiva.</span>",
    spotifyId: "4xIZcVoWNAVN3dHYIeCNl7",
    duration: "27:36"
},
{
    id: 9,
    title: "TEA, una condición de vida. Parte 1",
    titleDisplay: "TEA, UNA CONDICIÓN<br><span class='second-line'>DE VIDA. PARTE 1</span>",
    description: "El Trastorno del Espectro Autista es una condición de vida con la cual muchas personas aprenden a vivir. ¿Cuáles son las causas? ¿Qué conductas están marcadas en este trastorno? ¿Cuál es su prevalencia? ¿Desde que edad se puede hablar de un diagnóstico?",
    topics: "Entendiendo el TEA.<br><span class='topic-subtitle-new'>Causas, conductas,<br>diagnóstico temprano.</span>",
    spotifyId: "6DQVNWxtB4V4jtvYRTTc8K",
    duration: "31:07"
},
{
    id: 10,
    title: "TEA, una condición de vida. Parte 2",
    titleDisplay: "TEA, UNA CONDICIÓN<br><span class='second-line'>DE VIDA. PARTE 2</span>",
    description: "Continuamos hablando del Trastorno del Espectro Autista. Hablaremos de la importancia del diagnóstico a tiempo es tan fundamental como el plan de intervención de manera individualizada según los requerimientos de cada niño/niña o adulto.",
    topics: "Intervención individualizada.<br><span class='topic-subtitle-new'>Diagnóstico a tiempo,<br>planes personalizados.</span>",
    spotifyId: "0phQz1i4lpKr9N6LIHxBX2",
    duration: "30:41"
},
{
    id: 11,
    title: "El duelo migratorio te reinventa",
    titleDisplay: "EL DUELO MIGRATORIO<br><span class='second-line'>TE REINVENTA</span>",
    description: "No existe otra situación durante la vida donde se vivan tantas pérdidas a la vez como cuando migramos, despedirse de la familia, amigos, paisajes, cultura, lugares, comidas, incluso de tu profesión puede llevar a sacar una nueva versión de ti.",
    topics: "Pérdidas y reinvención.<br><span class='topic-subtitle-new'>Nueva versión de ti<br>a través de la migración.</span>",
    spotifyId: "1uJPRPAUJvKt66qqj5bZC0",
    duration: "36:00"
},
{
    id: 12,
    title: "Comunicación en la pareja",
    titleDisplay: "COMUNICACIÓN<br><span class='second-line'>EN LA PAREJA</span>",
    description: "Dale play a este episodio y no te arrepentirás, junto a nuestra colega Tatiana Vargas hemos tomado de referencia el libro 'Los hombres son de Marte y la mujeres de Venus' para hablar sobre la gran diferencia que existe en la comunicación femenina y masculina.",
    topics: "Diferencias comunicativas.<br><span class='topic-subtitle-new'>Comunicación femenina<br>vs masculina.</span>",
    spotifyId: "0ijsiF8wDNENyaLSmrd8Fe",
    duration: "39:36"
},
{
    id: 13,
    title: "Cómo diferenciar la tristeza de la depresión",
    titleDisplay: "CÓMO DIFERENCIAR LA TRISTEZA<br><span class='second-line'>DE LA DEPRESIÓN</span>",
    description: "Durante este capítulo hablaremos de la depresión y la tristeza, dejando entrever esas diferencia que existen entre ellas y la importancia que significa conocerlas, ya que eso implica que al identificar un cuadro depresivo se tomarán las acciones pertinentes.",
    topics: "Tristeza vs depresión.<br><span class='topic-subtitle-new'>Identificación y acciones<br>pertinentes.</span>",
    spotifyId: "1OAXsl9eXQKoQabb0fmnL4",
    duration: "19:03"
},
{
    id: 14,
    title: "Gestión emocional",
    titleDisplay: "GESTIÓN<br><span class='second-line'>EMOCIONAL</span>",
    description: "Los psicólogos de Crehabits crean un pequeño debate en torno a las diferencias que tienen las emociones primarias y secundarias en nuestro procesamiento de información, como se ve la falta de gestión emocional y la importancia de saber identificar, manejar, predecir nuestras emociones.",
    topics: "Emociones primarias vs secundarias.<br><span class='topic-subtitle-new'>Identificar, manejar,<br>predecir emociones.</span>",
    spotifyId: "2SF2yk2RXqMwSJ22yH9kiR",
    duration: "28:52"
},
{
    id: 15,
    title: "Trastorno Obsesivo Compulsivo (TOC)",
    titleDisplay: "TRASTORNO OBSESIVO<br><span class='second-line'>COMPULSIVO (TOC)</span>",
    description: "Escucha este episodio y sorpréndete con dos ejemplos que nos trae el psicólogo Camilo Cartagena de lo que piensa y siente una persona con TOC. Además veremos que es una compulsión, como son las obsesiones y lo que realmente pasa cuando estas dos características se unen.",
    topics: "Entendiendo el TOC.<br><span class='topic-subtitle-new'>Obsesiones, compulsiones<br>y experiencias reales.</span>",
    spotifyId: "3F3rgXQXuzOKxCW1tfaydC",
    duration: "20:41"
},
{
    id: 16,
    title: "Dependencia emocional y el otro extremo",
    titleDisplay: "DEPENDENCIA EMOCIONAL<br><span class='second-line'>Y EL OTRO EXTREMO</span>",
    description: "¿Podemos ser dependientes emocionales y siquiera notarlo? Este es de los temas de salud mental de los que más se suele hablar, ya que te hace pensar en retrospectiva, evaluar diferentes aspectos de tu vida y darte cuenta que te puedes estar fallando.",
    topics: "Reconocer dependencia.<br><span class='topic-subtitle-new'>Evaluación retrospectiva<br>de patrones relacionales.</span>",
    spotifyId: "32JJk2WihK4vWIafWAk2RD",
    duration: "21:13"
},
{
    id: 17,
    title: "Mitos sobre sexualidad",
    titleDisplay: "MITOS SOBRE<br><span class='second-line'>SEXUALIDAD</span>",
    description: "Bienvenidos a este episodio donde hablamos de las posibles razones por las que es sexo continua siendo un tabú en la actualidad. Y si quieres conocer algunos de los mitos más intrigantes quédate para así descubrir que tan ciertos son.",
    topics: "Desmitificando sexualidad.<br><span class='topic-subtitle-new'>Tabúes actuales<br>y mitos intrigantes.</span>",
    spotifyId: "5gXMbMGVpqMrxLtVUyeW4v",
    duration: "19:41"
},
{
    id: 18,
    title: "Pataletas, una gran oportunidad",
    titleDisplay: "PATALETAS<br><span class='second-line'>UNA GRAN OPORTUNIDAD</span>",
    description: "Las pataletas además de ser incómodas, están muy mal vistas parecen ser sinónimo de descontrol, mal comportamiento, incluso de manipulación. Te invito a escuchar este episodio y darte la oportunidad de hacer las cosas mejor con tu hijo o hija.",
    topics: "Reframing pataletas.<br><span class='topic-subtitle-new'>Oportunidades de<br>crecimiento familiar.</span>",
    spotifyId: "4RbaKcQVxIDemEPmWNppIG",
    duration: "20:48"
},
{
    id: 19,
    title: "Mindfulness: vivir aquí, vivir ahora",
    titleDisplay: "MINDFULNESS<br><span class='second-line'>VIVIR AQUÍ, VIVIR AHORA</span>",
    description: "¿Realmente eres consciente de tu respiración? primero que nada, ¿sabes respirar? Bienvenidos a este episodio, juntos veremos la importancia no solo de la respiración sino de vivir conscientemente en nuestra cotidianidad y apreciar los pequeños detalles.",
    topics: "Respiración consciente.<br><span class='topic-subtitle-new'>Vivir conscientemente,<br>apreciar detalles.</span>",
    spotifyId: "0xR9PR8JmxKh3ZWvG5FrOK",
    duration: "23:12"
},
{
    id: 20,
    title: "Redes sociales y autoestima parte 1",
    titleDisplay: "REDES SOCIALES Y<br><span class='second-line'>AUTOESTIMA PARTE 1</span>",
    description: "En la actualidad las redes sociales hacen parte de nuestra vida, lo que era una herramienta más de comunicación se ha convertido en un sin número de componentes que cada día hace que las tomemos más en cuenta en nuestra vida, en este episodio hablamos sobre la influencia que ejercen en el autoestima.",
    topics: "Influencia digital.<br><span class='topic-subtitle-new'>Redes sociales<br>vs autoestima.</span>",
    spotifyId: "71q6Bh3kFeHV8NHfqJQTK6",
    duration: "30:23"
},
{
    id: 21,
    title: "Redes sociales y autoestima parte 2",
    titleDisplay: "REDES SOCIALES Y<br><span class='second-line'>AUTOESTIMA PARTE 2</span>",
    description: "Continuamos hablando sobre la influencia que ejercen las redes sociales en el autoestima, pero ¿Cómo proteger nuestra autoestima? ¿Cómo proteger a los más vulnerables? Descubre estrategias prácticas en este episodio.",
    topics: "Protección digital.<br><span class='topic-subtitle-new'>Estrategias prácticas<br>para vulnerables.</span>",
    spotifyId: "6FeTarXLSeYQxp9EKpx16L",
    duration: "20:55"
},
{
    id: 22,
    title: "Hablemos de ego",
    titleDisplay: "HABLEMOS<br><span class='second-line'>DE EGO</span>",
    description: "'El ego es un monstruo fascinante' dice Alanis Morissette, esta frase describe muy bien el ego, no quieras quitarte el ego porque el mismo deseo de quitártelo ya es geocéntrico. Exploramos este fascinante tema en profundidad.",
    topics: "El monstruo fascinante.<br><span class='topic-subtitle-new'>Paradoja del ego<br>y su naturaleza.</span>",
    spotifyId: "1ET8lQh4sj7FpdjjqeYWby",
    duration: "18:46"
},
{
    id: 23,
    title: "Límites, dejar de fallarnos",
    titleDisplay: "LÍMITES<br><span class='second-line'>DEJAR DE FALLARNOS</span>",
    description: "Los límites son una delgada línea entre lo que permito o no que suceda en mi espacio para mantenerlo seguro, pero ¿por qué nos cuesta tanto imponerlos? no solo a los demás sino a nosotros mismos. Dale click a este episodio y descubre esto y mucho más.",
    topics: "Proteger nuestro espacio.<br><span class='topic-subtitle-new'>Límites propios<br>y hacia otros.</span>",
    spotifyId: "1X1HhPbckxUV10EUognTlE",
    duration: "25:07"
},
{
    id: 24,
    title: "La familia como primera escuela",
    titleDisplay: "LA FAMILIA COMO<br><span class='second-line'>PRIMERA ESCUELA</span>",
    description: "Este entretenido episodio nos brinda una perspectiva muy amplia de cómo la adultez se ve influida por la infancia individual con referencia a todas esas enseñanzas que tienen que ver con valores, acompañamiento, vínculos.",
    topics: "Infancia que marca.<br><span class='topic-subtitle-new'>Valores, acompañamiento<br>y vínculos tempranos.</span>",
    spotifyId: "7Cm7MUPPT9fHWv6XMmGGij",
    duration: "35:00"
},
{
    id: 25,
    title: "Primeros Auxilios Psicológicos (PAP)",
    titleDisplay: "PRIMEROS AUXILIOS<br><span class='second-line'>PSICOLÓGICOS (PAP)</span>",
    description: "¿Alguna vez has estado en una situación donde quisieras hacer más por esa persona que lo está pasando muy mal? Los PAP son clave para el futuro de la persona afectada, pueden prevenir el desarrollo de trastornos como por ejemplo Trastorno de estrés postraumático.",
    topics: "Ayuda inmediata.<br><span class='topic-subtitle-new'>Prevenir trastornos<br>post-traumáticos.</span>",
    spotifyId: "1spxL2sf5ZvESyGAXI9rn8",
    duration: "34:26"
},
{
    id: 26,
    title: "Depresión Leve y Mayor",
    titleDisplay: "DEPRESIÓN<br><span class='second-line'>LEVE Y MAYOR</span>",
    description: "La depresión es una de las enfermedades que más causan muertes a nivel mundial, el primer paso para combatirla es aceptarla y reconocerla, dale click a este episodio y conoce que es la depresión, cuales son sus síntomas, la diferencia entre depresión leve y mayor.",
    topics: "Tipos de depresión.<br><span class='topic-subtitle-new'>Aceptación, reconocimiento<br>y diferencias.</span>",
    spotifyId: "11TYEbNDGMTJIhbhjhuNRM",
    duration: "21:52"
},
{
    id: 27,
    title: "Ghosting, Pocketing y más denominaciones a las relaciones",
    titleDisplay: "GHOSTING, POCKETING<br><span class='second-line'>Y MÁS DENOMINACIONES</span>",
    description: "Este episodio es algo así como un glosario de palabras que se consideran tendencia ahora mismo, especialmente hacen referencia a las distintas dinámicas en las relaciones o en un intento por entablar relaciones de pareja.",
    topics: "Glosario relacional.<br><span class='topic-subtitle-new'>Nuevas dinámicas<br>de pareja modernas.</span>",
    spotifyId: "0aLn004bDwnKZtPVDsV3pd",
    duration: "27:02"
},
{
    id: 28,
    title: "Bien ido 2023 & Bienvenido 2024",
    titleDisplay: "BIEN IDO 2023 &<br><span class='second-line'>BIENVENIDO 2024</span>",
    description: "Aquellas cosas que nos enseño el 2023 y dar ese cierre tan esperado por muchos, mientras se desea un 2024 de crecimiento, propósitos cumplidos y más salud mental.",
    topics: "Reflexión anual.<br><span class='topic-subtitle-new'>Cierre, aprendizajes<br>y nuevos propósitos.</span>",
    spotifyId: "2squCodVtFodUy9nWXu6OT",
    duration: "20:19"
},
{
    id: 29,
    title: "TAG más allá de la ansiedad",
    titleDisplay: "TAG MÁS ALLÁ<br><span class='second-line'>DE LA ANSIEDAD</span>",
    description: "En este episodio los psicólogos Julieth Reyes y Camilo Cartagena hablan sobre los síntomas, causas y todas aquellas características, que además, nos llevan a lograr diferenciar cuando se trata de un Trastorno de Ansiedad Generalizada o de la ansiedad que surge ante situaciones demandantes.",
    topics: "Diferenciando TAG.<br><span class='topic-subtitle-new'>Ansiedad generalizada<br>vs situacional.</span>",
    spotifyId: "4D3XyKcSY3vPsQUAX4cagJ",
    duration: "19:37"
},
{
    id: 30,
    title: "Apego seguro y ansioso ambivalente",
    titleDisplay: "APEGO SEGURO Y<br><span class='second-line'>ANSIOSO AMBIVALENTE</span>",
    description: "¿Qué es el apego? ¿Desde donde surge? ¿Cómo influye en la vida? ¿Cómo podemos ver el tipo de apego en niños y adultos? Estas y otras respuestas las encontrarás en estos 20 minutos, dale click y aprende con nosotros.",
    topics: "Fundamentos del apego.<br><span class='topic-subtitle-new'>Influencia en niños<br>y adultos.</span>",
    spotifyId: "7hOGmV2GEmENWcxOuvk8CU",
    duration: "19:27"
},
{
    id: 31,
    title: "Apego evitativo y desorganizado",
    titleDisplay: "APEGO EVITATIVO<br><span class='second-line'>Y DESORGANIZADO</span>",
    description: "Tras escuchar los 4 tipos de apegos, podemos descubrir la manera de vínculo que aprendiste en tu niñez, no queremos culpar a nuestro padres de lo que hacemos y sentimos hoy, por el contrario es la oportunidad de cambiar la mirada, modificar conductas.",
    topics: "Transformar vínculos.<br><span class='topic-subtitle-new'>Cambiar mirada<br>y modificar conductas.</span>",
    spotifyId: "2otTqO6TYzM6rFOLYKvD4Z",
    duration: "19:51"
},
{
    id: 32,
    title: "Los 5 lenguajes del amor",
    titleDisplay: "LOS 5 LENGUAJES<br><span class='second-line'>DEL AMOR</span>",
    description: "Los psicólogos Julieth Reyes, Tatiana Vargas y Camilo Cartagena abordan un tema del que en la actualidad se habla mucho y tal vez se aplica poco. Entender, comprender y amar a los demás a través de los lenguajes del amor.",
    topics: "Expresar amor efectivamente.<br><span class='topic-subtitle-new'>Entender y aplicar<br>los 5 lenguajes.</span>",
    spotifyId: "4J4miDJ3l8TAcl0re9mn4i",
    duration: "37:23"
},
{
    id: 33,
    title: "En busca de la autoestima",
    titleDisplay: "EN BUSCA<br><span class='second-line'>DE LA AUTOESTIMA</span>",
    description: "Da click en este episodio y descubre la autoestima desde un enfoque que te llevará por un viaje de autoconocimiento y en búsqueda de esa estima que, por situaciones, personas o determinados momentos de nuestro día a día vamos perdiendo.",
    topics: "Viaje de autoconocimiento.<br><span class='topic-subtitle-new'>Recuperar la estima<br>perdida cotidianamente.</span>",
    spotifyId: "3la4Jb17e5nbQFlkOenoq4",
    duration: "25:24"
},
{
    id: 34,
    title: "¿Qué hay detrás del amor propio?",
    titleDisplay: "¿QUÉ HAY DETRÁS<br><span class='second-line'>DEL AMOR PROPIO?</span>",
    description: "Cuando nos damos amor, cuando alimentamos cada parte de nosotros de amor se nota, en cada aspecto de nuestra vida se ve reflejado. El amor propio significa algo completamente diferente para cada persona.",
    topics: "Alimentar con amor.<br><span class='topic-subtitle-new'>Reflexión personal<br>en cada aspecto.</span>",
    spotifyId: "6GJ4XJYDELYfvuisiNLeeF",
    duration: "20:52"
},
{
    id: 35,
    title: "Los auto's que tienes (no son coches de lo que hablamos)",
    titleDisplay: "LOS AUTO'S QUE TIENES<br><span class='second-line'>(NO SON COCHES)</span>",
    description: "La mayoría del tiempo no estamos dispuestos a descubrirnos, y más aún cuando eso que guardamos duele, pero lo cierto es que debemos conocernos y conocer el poder que tiene entender cómo interactúan pensamientos, emociones y comportamiento.",
    topics: "Autoconocimiento profundo.<br><span class='topic-subtitle-new'>Interacción pensamientos,<br>emociones y comportamiento.</span>",
    spotifyId: "2sTUhlLzr8vCVxpr5GLpvV",
    duration: "29:30"
},
{
    id: 36,
    title: "Qué difícil es aceptar el NO",
    titleDisplay: "QUÉ DIFÍCIL ES<br><span class='second-line'>ACEPTAR EL NO</span>",
    description: "Entendemos que para lograr decir no primero debemos aceptar un NO como respuesta, tener claro que así como no estamos obligados a decir SI, las demás personas tampoco están disponibles o dispuestas siempre.",
    topics: "Aceptar rechazos.<br><span class='topic-subtitle-new'>Reciprocidad en<br>límites y disponibilidad.</span>",
    spotifyId: "7mh9tbxvaE19yjwYvks7zm",
    duration: "19:09"
},
{
    id: 37,
    title: "Ataques de pánico, perder el control",
    titleDisplay: "ATAQUES DE PÁNICO<br><span class='second-line'>PERDER EL CONTROL</span>",
    description: "El testimonio de una persona que ha sufrido ataques de pánico ha inspirado este episodio, nos cuenta cómo se sienten y también cómo ha logrado manejarlos, te invitamos a escucharlo, entender y abrazar a todas las personas que pasan por esto.",
    topics: "Testimonio real pánico.<br><span class='topic-subtitle-new'>Manejo y comprensión<br>de experiencias.</span>",
    spotifyId: "2lB4GDs70LkZtqi6lBmL9f",
    duration: "16:11"
},
{
    id: 38,
    title: "El poder del amor en la crianza",
    titleDisplay: "EL PODER DEL AMOR<br><span class='second-line'>EN LA CRIANZA</span>",
    description: "El amor tiene un impacto muy grande en la vida de todos los seres humanos, es un sentimiento que todos queremos experimentar porque nos hace sentir cosas muy lindas. Ahora imaginen el poder que tiene este sentimiento al llevarlo a la crianza de los niños.",
    topics: "Crianza con amor.<br><span class='topic-subtitle-new'>Impacto en desarrollo<br>infantil integral.</span>",
    spotifyId: "4zDD7ZrlM0l91sZUQe0Nii",
    duration: "16:19"
},










{
   id: 39,
   title: "Los 5 pilares de una relación sana",
   titleDisplay: "LOS 5 PILARES DE<br><span class='second-line'>UNA RELACIÓN SANA</span>",
   description: "Amar es de las cosas más maravillosas que vivimos los seres humanos, pero que bonito se hace cuando es sano, recíproco, cuando hay bases sólidas, cuando se trabaja cada día para poder fortalecer la relación.",
   topics: "Bases sólidas relacionales.<br><span class='topic-subtitle-new'>Amor sano, recíproco<br>y fortalecimiento diario.</span>",
   spotifyId: "39IXb2xxfCWhPkT4dzjUlm",
   duration: "25:01"
},
{
   id: 40,
   title: "¿Se puede ser amigo del ex?",
   titleDisplay: "¿SE PUEDE SER<br><span class='second-line'>AMIGO DEL EX?</span>",
   description: "Seguramente has llegado a este episodio tras preguntarte si existe la posibilidad de tener una relación de amistad con alguien con quien tuviste una relación de pareja, pues para ser pareja deberíamos pasar por ese filtro de amigo previo.",
   topics: "Relaciones post-ruptura.<br><span class='topic-subtitle-new'>Posibilidad de amistad<br>después del amor.</span>",
   spotifyId: "2WV2Qkz4GMUcTSPQtcDjRt",
   duration: "40:46"
},
{
   id: 41,
   title: "Inteligencia Emocional, comprensión y gestión de tu mundo interior",
   titleDisplay: "INTELIGENCIA EMOCIONAL<br><span class='second-line'>COMPRENSIÓN Y GESTIÓN</span>",
   description: "El concepto de inteligencia emocional parece ser complejo pero aquí te lo explicamos de la manera más sencilla posible, te planteamos ejemplos donde no te queda otra opción que entenderlo.",
   topics: "Simplificando inteligencia emocional.<br><span class='topic-subtitle-new'>Ejemplos prácticos<br>para comprenderla.</span>",
   spotifyId: "6qcHLdnzsTTUKzqDBBym5m",
   duration: "21:28"
},
{
   id: 42,
   title: "TCA, más allá de un ideal",
   titleDisplay: "TCA, MÁS ALLÁ<br><span class='second-line'>DE UN IDEAL</span>",
   description: "En los Trastornos de la Conducta Alimentaria la influencia que ejerce la sociedad tanto para provocar como para reforzarlos es incalculable, este episodio de principio a fin es una 'cápsula vitamina' ya que desde la psicoeducación buscamos más empatía.",
   topics: "Cápsula vitamina TCA.<br><span class='topic-subtitle-new'>Psicoeducación para<br>mayor empatía.</span>",
   spotifyId: "69AdEjsBfnwFUrtqNgFli1",
   duration: "30:35"
},
{
   id: 43,
   title: "¿Cómo crear un hábito?",
   titleDisplay: "¿CÓMO CREAR<br><span class='second-line'>UN HÁBITO?</span>",
   description: "¿Por qué nos cuesta tanto hacernos amigos de un nuevo hábito? la cuestión es que no queremos el proceso, lo que queremos es el resultado, ahí caemos en el error de la inmediatez... pero dale click a este episodio y escucha todo lo que tenemos para contarte.",
   topics: "Proceso vs resultado.<br><span class='topic-subtitle-new'>Superar el error<br>de la inmediatez.</span>",
   spotifyId: "6xozPJKzcl5Wc3YCoUxka5",
   duration: "29:20"
},
{
   id: 44,
   title: "Síndrome del Nido Vacío",
   titleDisplay: "SÍNDROME DEL<br><span class='second-line'>NIDO VACÍO</span>",
   description: "Este episodio de hoy nos invita a la reflexión familiar, a la identificación de cada una de esas situaciones que empiezan a suceder cuando los hijos se van de casa y las repercusiones positivas o negativas que esto tiene para los padres o cuidadores.",
   topics: "Reflexión familiar profunda.<br><span class='topic-subtitle-new'>Cuando los hijos<br>se van de casa.</span>",
   spotifyId: "7sVX1C5Kl1rIJDPlB6enSV",
   duration: "26:16"
},
{
   id: 45,
   title: "Agorafobia: mi casa, mi lugar seguro",
   titleDisplay: "AGORAFOBIA<br><span class='second-line'>MI CASA, MI LUGAR SEGURO</span>",
   description: "Tener miedo al miedo nos impide atravesarlo y al no hacerlo nos va ganando más terreno al punto de arrinconarnos en nuestra propia casa. ¿Te imaginas querer tener el control de todo fuera de ella?",
   topics: "Miedo al miedo.<br><span class='topic-subtitle-new'>Control versus<br>seguridad del hogar.</span>",
   spotifyId: "5YDvVPmlVdug2vlqhDt1Mo",
   duration: "18:30"
},
{
   id: 46,
   title: "Viviendo con dislexia",
   titleDisplay: "VIVIENDO<br><span class='second-line'>CON DISLEXIA</span>",
   description: "Pasamos desapercibido cuantas veces al día usamos la función de leer o escribir porque lo aprendemos desde pequeños y lo hacemos automático día tras día. Sin embargo, hay quienes no logran hacerlo con tanta facilidad.",
   topics: "Desafíos de lectoescritura.<br><span class='topic-subtitle-new'>Lo que no es<br>automático para todos.</span>",
   spotifyId: "4nrOznXuOzohRPSacyRb3X",
   duration: "30:03"
},
{
   id: 47,
   title: "Alzheimer, porque no siempre olvidar es bueno",
   titleDisplay: "ALZHEIMER<br><span class='second-line'>NO SIEMPRE OLVIDAR ES BUENO</span>",
   description: "¿Qué ocurre en el cerebro cuando hay una demencia? ¿Qué factores contribuyen a padecer esta enfermedad? ¿Puede estar relacionada con nuestros hábitos? Escucharás esto y más durante este episodio.",
   topics: "Entendiendo demencia.<br><span class='topic-subtitle-new'>Factores, hábitos<br>y cambios cerebrales.</span>",
   spotifyId: "1EonK5CfP0MnEkMBtTcA25",
   duration: "29:05"
},
{
   id: 48,
   title: "Uso de pantallas en niños",
   titleDisplay: "USO DE PANTALLAS<br><span class='second-line'>EN NIÑOS</span>",
   description: "Es fundamental que los padres adapten sus esfuerzos en función de las necesidades y capacidades de sus hijos para poder darle el mejor uso posible de las pantallas, realmente sabemos que este es un desafío para todos.",
   topics: "Desafío digital familiar.<br><span class='topic-subtitle-new'>Adaptar uso según<br>necesidades infantiles.</span>",
   spotifyId: "0jUBS39qOtznwnJBSeNpqX",
   duration: "24:53"
},
{
   id: 49,
   title: "Conflictos en pareja ¿Bueno o malo?",
   titleDisplay: "CONFLICTOS EN PAREJA<br><span class='second-line'>¿BUENO O MALO?</span>",
   description: "Las relaciones de pareja siempre son fascinantes, sobre todo con la diversidad que existe, porque claramente dependiendo del tipo de relación que tengas, serán los conflictos que puedan surgir, y por eso en este episodio hablaremos sobre la Resolución de conflictos en pareja.",
   topics: "Resolución de conflictos.<br><span class='topic-subtitle-new'>Diversidad relacional<br>y manejo saludable.</span>",
   spotifyId: "7hEQM7rds47S8Nbas1O2SE",
   duration: "24:03"
},
{
   id: 50,
   title: "Cómo y cuándo terminar una relación",
   titleDisplay: "CÓMO Y CUÁNDO TERMINAR<br><span class='second-line'>UNA RELACIÓN</span>",
   description: "Para cerrar nuestra primera temporada, hemos decidido crear una la serie del desamor, un conjunto de 4 episodios que nos ayudará a comprender un poco más a fondo lo contrario del amor. Este capítulo será útil para ese momento donde el desamor ha llegado a nuestra puerta.",
   topics: "Serie del desamor.<br><span class='topic-subtitle-new'>Cuándo cerrar<br>ciclos amorosos.</span>",
   spotifyId: "1b7NDSsk5BvVd2jLoAuBVd",
   duration: "36:45"
},
{
   id: 51,
   title: "Contacto cero",
   titleDisplay: "CONTACTO<br><span class='second-line'>CERO</span>",
   description: "Este desamor avanza y no nos podemos quedar con las manos cruzadas ¿o si?. Pues durante el contacto cero es mejor que si, que no hagamos nada, NADAA por tener contacto con esa persona .. ya verás lo bien que te sentará.",
   topics: "Estrategia de sanación.<br><span class='topic-subtitle-new'>La importancia de<br>no hacer nada.</span>",
   spotifyId: "5xy0nufU5mAqyQeOsQgBtG",
   duration: "22:47"
},
{
   id: 52,
   title: "Duelo por ruptura amorosa",
   titleDisplay: "DUELO POR<br><span class='second-line'>RUPTURA AMOROSA</span>",
   description: "A medida que avanza esta serie nos topamos con la parte que más se hace latente ante el desamor, la despedida, el final de un camino conjunto, la respuesta a nuestra honestidad o la del otro… Bienvenidos a la tusa amorosa, como le llamamos en colombia.",
   topics: "La tusa amorosa.<br><span class='topic-subtitle-new'>Despedidas y finales<br>de caminos conjuntos.</span>",
   spotifyId: "5qC717Hmn30wGuoodSm2a1",
   duration: "38:32"
},
{
   id: 53,
   title: "Reconstruyendo la autoestima post ruptura",
   titleDisplay: "RECONSTRUYENDO LA AUTOESTIMA<br><span class='second-line'>POST RUPTURA</span>",
   description: "Este episodio es una cápsula vitamina (prácticamente), directa al autoestima que cae cuando el desamor toca a la puerta y la ruptura llega. Recomendadísimo para toda persona que esté atravesando un duelo por ruptura.",
   topics: "Cápsula vitamina autoestima.<br><span class='topic-subtitle-new'>Reconstrucción después<br>del desamor.</span>",
   spotifyId: "7opCNSlvG2bk74TeOnSgJT",
   duration: "37:10"
}
    // AQUÍ AGREGARÁS TUS 93 EPISODIOS RESTANTES CON EL MISMO FORMATO
];

// FUNCIÓN PARA OBTENER ID DEL PODCAST DESDE HASH
function getExactPodcastIdFromHash() {
    const hash = window.location.hash;
    if (hash.startsWith('#podcast')) {
        return parseInt(hash.replace('#podcast', ''));
    }
    return null;
}

// FUNCIÓN PARA MOSTRAR EL PODCAST CON DISEÑO EXACTO
function displayExactPodcast(podcast) {
    console.log('🎵 Mostrando podcast con diseño exacto:', podcast.title);
    
    // Actualizar título principal
    const titleElement = document.getElementById('podcast-title-main');
    if (titleElement) {
        titleElement.innerHTML = podcast.titleDisplay;
    }
    
    // Actualizar descripción
    const descriptionElement = document.getElementById('podcast-description-main');
    if (descriptionElement) {
        descriptionElement.textContent = podcast.description;
    }
    
    // Actualizar reproductor de Spotify
    const spotifyContainer = document.getElementById('spotify-container-main');
    const spotifyIframe = document.getElementById('spotify-iframe');
    if (spotifyIframe && podcast.spotifyId && !podcast.spotifyId.includes('CAMBIAR_POR_ID_REAL')) {
        spotifyIframe.src = `https://open.spotify.com/embed/episode/${podcast.spotifyId}?utm_source=generator`;
    }
    
    // Actualizar temas del episodio
    const topicsElement = document.getElementById('episode-topics-content');
    if (topicsElement) {
        topicsElement.innerHTML = podcast.topics;
    }
    
    // Actualizar título de la página
    document.title = `${podcast.title} - Crehabits Podcast`;
    
    // Generar lista de otros episodios
    generateOtherEpisodesList(podcast.id);
    
    // Crear navegación
    createExactNavigation(podcast);
}

// FUNCIÓN PARA GENERAR LISTA DE OTROS EPISODIOS
function generateOtherEpisodesList(currentId) {
    const listContainer = document.getElementById('other-episodes-list');
    if (!listContainer) return;
    
    // Filtrar otros episodios (excluir el actual)
    const otherEpisodes = exactPodcastDatabase.filter(ep => ep.id !== currentId).slice(0, 3);
    
    listContainer.innerHTML = otherEpisodes.map((episode, index) => `
        <a href="#podcast${episode.id}" class="episode-item">
            <div class="episode-number">${episode.id}</div>
            <div class="episode-details">
                <div class="episode-title-small">${episode.title}</div>
                <div class="crehabits-label">Crehabits</div>
            </div>
            <div class="episode-duration">${episode.duration}</div>
        </a>
    `).join('');
}

// FUNCIÓN PARA CREAR NAVEGACIÓN EXACTA
function createExactNavigation(currentPodcast) {
    const navContainer = document.getElementById('podcast-navigation-main');
    if (!navContainer) return;
    
    const currentIndex = exactPodcastDatabase.findIndex(p => p.id === currentPodcast.id);
    const prevPodcast = currentIndex > 0 ? exactPodcastDatabase[currentIndex - 1] : null;
    const nextPodcast = currentIndex < exactPodcastDatabase.length - 1 ? exactPodcastDatabase[currentIndex + 1] : null;
    
    let navHTML = '<div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">';
    
    if (prevPodcast) {
        navHTML += `
            <a href="#podcast${prevPodcast.id}" class="nav-button">
                ← Episodio Anterior
            </a>
        `;
    }
    
    navHTML += `
        <a href="/2360-2/" class="nav-button">
            📋 Todos los episodios
        </a>
    `;
    
    if (nextPodcast) {
        navHTML += `
            <a href="#podcast${nextPodcast.id}" class="nav-button">
                Siguiente Episodio →
            </a>
        `;
    }
    
    navHTML += '</div>';
    navContainer.innerHTML = navHTML;
}

// FUNCIÓN PARA CARGAR PODCAST DESDE HASH
function loadExactPodcastFromHash() {
    const podcastId = getExactPodcastIdFromHash();
    
    if (!podcastId) {
        displayExactPodcast(exactPodcastDatabase[0]);
        return;
    }
    
    const podcast = exactPodcastDatabase.find(p => p.id === podcastId);
    
    if (podcast) {
        displayExactPodcast(podcast);
    } else {
        displayExactPodcast(exactPodcastDatabase[0]);
    }
}

// FUNCIÓN PARA MANEJAR CAMBIOS EN EL HASH
function handleExactHashChange() {
    loadExactPodcastFromHash();
}

// INICIALIZAR EL SISTEMA EXACTO
function initExactPodcastSystem() {
    console.log('🚀 Sistema de podcasts con diseño exacto iniciado');
    
    // Cargar podcast inicial
    loadExactPodcastFromHash();
    
    // Escuchar cambios en el hash
    window.addEventListener('hashchange', handleExactHashChange);
    
    console.log('✅ Sistema exacto listo');
}

// INICIALIZAR
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(initExactPodcastSystem, 100);
});

if (document.readyState !== 'loading') {
    setTimeout(initExactPodcastSystem, 100);
}

console.log('📡 Script de diseño exacto cargado');
</script>