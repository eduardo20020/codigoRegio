<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio Creativo</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8387562831671712"
     crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(45deg, #3b82f6, #8b5cf6);
        }
        .project-card:hover .project-overlay {
            opacity: 1;
            transform: translateY(0);
        }
        .typewriter {
            overflow: hidden;
            border-right: .15em solid #3b82f6;
            white-space: nowrap;
            letter-spacing: .15em;
            animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
        }
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #3b82f6; }
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- Header/Navbar -->
    <header class="sticky top-0 z-50 bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold gradient-text">Codigo Regio</a>
            <nav class="hidden md:flex space-x-8">
                <a href="#inicio" class="text-gray-700 hover:text-blue-600 transition">Inicio</a>
                <a href="#proyectos" class="text-gray-700 hover:text-blue-600 transition">Proyectos</a>
                <a href="#blog" class="text-gray-700 hover:text-blue-600 transition">Blog</a>
                <a href="#sobre-mi" class="text-gray-700 hover:text-blue-600 transition">Sobre mí</a>
                <a href="#contacto" class="text-gray-700 hover:text-blue-600 transition">Contacto</a>
            </nav>
            <button class="md:hidden text-gray-700">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="py-20 bg-gradient-to-r from-blue-50 to-purple-50">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Hola, soy <span class="gradient-text">Brandon Sanchez</span></h1>
                <div class="typewriter text-xl md:text-2xl text-gray-600 mb-6">
                    Desarrollador Web & Creador de Contenido
                </div>
                <p class="text-gray-600 mb-8 text-lg">
                    Comparto mis proyectos, experiencias y aprendizajes en el mundo del desarrollo web.
                </p>
                <div class="flex space-x-4">
                    <a href="#proyectos" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition shadow-lg">
                        Ver Proyectos
                    </a>
                    <a href="#contacto" class="px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">
                        Contactarme
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-white shadow-xl">
                    <img src="/cerro2.png" 
                         alt="Foto de perfil" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="proyectos" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Mis Proyectos</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
                Aquí puedes encontrar algunos de mis trabajos recientes. Cada proyecto representa un desafío único y una oportunidad de aprendizaje.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-card rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 relative">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Proyecto 1" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="project-overlay absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-center items-center opacity-0 transition duration-300 transform translate-y-4">
                            <h3 class="text-white text-xl font-bold mb-2">Gestion</h3>
                            <p class="text-gray-300 text-center px-4 mb-4">Sistema de gestion de tickets</p>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Laravel</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">PHP</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="#" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition text-sm">
                                Ver Detalles
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Sistema de gestion de tickets</h3>
                        <p class="text-gray-600 mb-4">Plataforma de e-commerce con sistema de recomendaciones y análisis de datos.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                <i class="fas fa-external-link-alt mr-2"></i> Visitar
                            </a>
                            <span class="text-sm text-gray-500">Junio 2023</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="project-card rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 relative">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1636&q=80" 
                             alt="Proyecto 2" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="project-overlay absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-center items-center opacity-0 transition duration-300 transform translate-y-4">
                            <h3 class="text-white text-xl font-bold mb-2">Automatizacion</h3>
                            <p class="text-gray-300 text-center px-4 mb-4">Plataforma para compartir contenido multimedia</p>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">N8N</span>
                                <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Python</span>
                            </div>
                            <a href="#" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition text-sm">
                                Ver Detalles
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Automatizacion de flujos de trabajo con N8N</h3>
                        <p class="text-gray-600 mb-4">Comunidad para compartir fotografías con sistema de votación y comentarios.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                <i class="fas fa-external-link-alt mr-2"></i> Visitar
                            </a>
                            <span class="text-sm text-gray-500">Abril 2023</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="project-card rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 relative">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1415&q=80" 
                             alt="Proyecto 3" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="project-overlay absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-center items-center opacity-0 transition duration-300 transform translate-y-4">
                            <h3 class="text-white text-xl font-bold mb-2">Dashboard</h3>
                            <p class="text-gray-300 text-center px-4 mb-4">Panel de control con visualización de datos en tiempo real</p>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">React</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">D3.js</span>
                                <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">API REST</span>
                            </div>
                            <a href="#" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition text-sm">
                                Ver Detalles
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Dashboard Analítico</h3>
                        <p class="text-gray-600 mb-4">Visualización de datos empresariales con gráficos interactivos y exportación.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                <i class="fas fa-external-link-alt mr-2"></i> Visitar
                            </a>
                            <span class="text-sm text-gray-500">Febrero 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition inline-flex items-center">
                    <i class="fas fa-folder-open mr-2"></i> Ver Todos los Proyectos
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Últimos Artículos</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
                Comparto mis conocimientos, experiencias y reflexiones sobre desarrollo web, tecnología y más.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" 
                             alt="Artículo 1" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mr-2">Tutorial</span>
                            <span class="text-sm text-gray-500">15 Junio 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Optimización de Rendimiento en React</h3>
                        <p class="text-gray-600 mb-4">Aprende técnicas avanzadas para mejorar el rendimiento de tus aplicaciones React.</p>
                        <div class="flex justify-between items-center">
                            <a href="/articulos/optimizacion-en-react.html" class="text-blue-600 hover:text-blue-800 flex items-center">
                                Leer más <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">8 min lectura</span>
                        </div>
                    </div>
                </div>
                
                <!-- Article 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" 
                             alt="Artículo 2" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded mr-2">Experiencia</span>
                            <span class="text-sm text-gray-500">2 Mayo 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Mi Transición a Desarrollo Fullstack</h3>
                        <p class="text-gray-600 mb-4">Cómo pasé de ser desarrollador frontend a dominar también el backend.</p>
                        <div class="flex justify-between items-center">
                            <a href="/articulos/transicion-a-fullstack.html" class="text-blue-600 hover:text-blue-800 flex items-center">
                                Leer más <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">12 min lectura</span>
                        </div>
                    </div>
                </div>
                
                <!-- Article 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Artículo 3" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded mr-2">Tecnología</span>
                            <span class="text-sm text-gray-500">20 Abril 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Tailwind CSS vs. CSS tradicional</h3>
                        <p class="text-gray-600 mb-4">Comparativa detallada entre Tailwind CSS y el enfoque tradicional con CSS.</p>
                        <div class="flex justify-between items-center">
                            <a href="/articulos/tailwind-vs-css-tradicional.html" class="text-blue-600 hover:text-blue-800 flex items-center">
                                Leer más <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">10 min lectura</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition shadow-lg inline-flex items-center">
                    <i class="fas fa-book-open mr-2"></i> Ver Todos los Artículos
                </a>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="sobre-mi" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-10 md:mb-0 flex justify-center">
                    <div class="relative w-64 h-64 rounded-full overflow-hidden border-4 border-white shadow-xl">
                        <img src="/cerro2.png" 
                             alt="Foto de perfil" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="md:w-2/3 md:pl-12">
                    <h2 class="text-3xl font-bold mb-6">Sobre Mí</h2>
                    <p class="text-gray-600 mb-6 text-lg">
                        Soy un apasionado desarrollador web con más de 5 años de experiencia creando soluciones digitales innovadoras. 
                        Me especializo en JavaScript, React y Node.js, pero siempre estoy aprendiendo nuevas tecnologías.
                    </p>
                    <p class="text-gray-600 mb-6 text-lg">
                        En este blog comparto mis proyectos personales, tutoriales y reflexiones sobre el mundo del desarrollo web. 
                        Creo firmemente en el aprendizaje continuo y en compartir conocimiento con la comunidad.
                    </p>
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Mis Habilidades</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full">JavaScript</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full">Laravel</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full">PHP</span>
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full">HTML5</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full">CSS3</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">Tailwind</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full">C#</span>
                            <span class="px-3 py-1 bg-pink-100 text-pink-800 rounded-full">SQL Server</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full">Git</span>
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full">n8n</span>
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full">Python</span>

                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="py-16 bg-gray-900 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Contáctame</h2>
            <p class="text-gray-300 text-center max-w-2xl mx-auto mb-12">
                ¿Tienes un proyecto en mente o quieres colaborar? No dudes en contactarme.
            </p>
            
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/2">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium">Tu Nombre</label>
                            <input type="text" id="name" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium">Tu Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="john@example.com">
                        </div>
                        <div>
                            <label for="subject" class="block mb-2 text-sm font-medium">Asunto</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Hablemos de un proyecto">
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium">Tu Mensaje</label>
                            <textarea id="message" rows="6" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Cuéntame sobre tu proyecto..."></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-lg transition font-medium">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="bg-gray-800 p-8 rounded-xl h-full">
                        <h3 class="text-xl font-semibold mb-6">Información de Contacto</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-blue-600 p-3 rounded-lg mr-4">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Email</h4>
                                    <p class="text-gray-400">codigoregiocontacto@gmail.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-blue-600 p-3 rounded-lg mr-4">
                                    <i class="fas fa-phone-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Teléfono</h4>
                                    <p class="text-gray-400">+52 8135906906</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-blue-600 p-3 rounded-lg mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Ubicación</h4>
                                    <p class="text-gray-400">Monterrey, México</p>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-semibold mt-10 mb-4">Sígueme</h3>
                        <div class="flex space-x-4">
                            <a href="https://github.com/eduardo20020" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/brandon-sanchez-692930310/" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="text-2xl font-bold gradient-text">Codigo Regio</a>
                    <p class="mt-2 text-sm">Compartiendo conocimiento y proyectos.</p>
                </div>
                <div class="flex flex-col md:flex-row md:space-x-10 space-y-4 md:space-y-0">
                    <div>
                        <h4 class="text-white font-medium mb-3">Enlaces</h4>
                        <ul class="space-y-2">
                            <li><a href="#inicio" class="hover:text-white transition">Inicio</a></li>
                            <li><a href="#proyectos" class="hover:text-white transition">Proyectos</a></li>
                            <li><a href="#blog" class="hover:text-white transition">Blog</a></li>
                            <li><a href="#sobre-mi" class="hover:text-white transition">Sobre mí</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-medium mb-3">Legal</h4>
                        <ul class="space-y-2">
                            <li><a href="/legal/privacidad.html" class="hover:text-white transition">Política de Privacidad</a></li>
                            <li><a href="/legal/terminos.html" class="hover:text-white transition">Términos de Uso</a></li>
                            <li><a href="/legal/cookies.html" class="hover:text-white transition">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm">
                <p>© 2023 MiBlog. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple JavaScript for mobile menu toggle
        document.querySelector('button.md\\:hidden').addEventListener('click', function() {
            const nav = document.querySelector('nav.md\\:flex');
            nav.classList.toggle('hidden');
            nav.classList.toggle('flex');
            nav.classList.toggle('flex-col');
            nav.classList.toggle('absolute');
            nav.classList.toggle('top-16');
            nav.classList.toggle('left-0');
            nav.classList.toggle('right-0');
            nav.classList.toggle('bg-white');
            nav.classList.toggle('p-4');
            nav.classList.toggle('space-y-4');
            nav.classList.toggle('space-x-8');
            nav.classList.toggle('shadow-md');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>