<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/home.html.twig */
class __TwigTemplate_adabb17835d42600dd4021a6782a9176 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        // line 53
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 59
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 61
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 63
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap\" rel=\"stylesheet\">


    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: -250px; /* sidebar initially hidden */
            z-index: 100;
            padding: 48px 0; /* Adjust as needed */
            overflow-x: hidden;
            overflow-y: auto; /* Show scrollbar if necessary */
            background-color: black; /* Background color */
            border-right: 1px solid #FF698D; /* Right border */
            transition: left 0.3s; /* Smooth transition */
        }

        .sidebar.active {
            left: 0; /* Sidebar visible */
        }

        .sidebar-heading {
            text-align: center;
            padding: 10px 15px;
        }

        .sidebar ul {
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .sidebar ul li {
            margin: 0;
            padding: 0;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center; /* Align icon and text vertically */
            padding: .5rem 4rem;
            color: #ffffff;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            background-color: #FF698D; /* Highlight on hover */
        }

        /* Button style */
        .sidebar-toggle {
            position: fixed;
            left: 10px;
            top: 10px;
            background-color: #FF698D;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 15px;
            cursor: pointer;
        }

        .sidebar-toggle:focus {
            outline: none;
        }

        /* Icon style */
        .sidebar ul li a i {
            margin-right: 10px; /* Add spacing between icon and text */
        }

        /* Custom button styles */
        .btn-custom {
            background-color: transparent;
            color: #FF698D;
            border-color: #FF698D;
        }

        .btn-custom:hover {
            background-color: #FF698D;
            border-color: #FF698D;
            color: white;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e4e4e4;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }
        .header-content {
            /* Annuler les effets du flexbox sur le contenu du header */
            display: initial;
            justify-content: initial;
            align-items: initial;
            height: initial;
        }

        .container {
            text-align: center;
            margin-top: 0px;

        }

        .image-container {
            display: flex;
            justify-content: center;
            flex-direction: row; /* Modification ici pour la disposition horizontale */
            margin-top: 20px; /* Ajout de marge pour l'espace entre les lignes */
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            transition: transform 0.3s ease;
            border-radius: 10px;
            margin: 0 10px;
        }

        .image-container img:hover {
            transform: translateY(-20px);
        }
        .pink-link {
            color: #FF698D;
        }



    </style>
</head>
<body>
<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Sidebar -->
        <nav class=\"col-md-3 col-lg-2 d-md-block sidebar\">
            <div class=\"sidebar-heading\" style=\"margin-top: -30px; margin-bottom: 40px; font-weight: bold; font-size: 20px;\">
                <span style=\"color: #FF698D;\">MY</span><span style=\"color: white;\">MONEY</span>
            </div>
            <div class=\"sidebar-sticky\"></div>

            <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-chart-line\"></i> Dashboard</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-file-alt\"></i> Orders</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-box\"></i> Products</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-users\"></i> Customers</a>
                </li>
            </ul>

            <!-- Séparateur -->
            <hr class=\"dropdown-divider\" style=\"margin-top: 470px; margin-bottom: 20px;\">

            <!-- Dropdown menu -->
            <div class=\"dropdown mt-auto\">
                <a href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"d-flex align-items-center justify-content-center text-white text-decoration-none\">
                    <i class=\"fas fa-user-circle me-2\" style=\"margin-right: 10px;\"></i> <!-- Icône Font Awesome pour \"Profile\" avec une marge à droite -->
                    <strong class=\"ms-2\">Profile</strong> <!-- Texte \"Profile\" avec une marge à gauche -->
                </a>
            </div>

        </nav>
        <!-- Main Content -->
        <main class=\"col\">
            <header class=\"d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom\">

                <div class=\"b-example-divider\"></div>
                <div class=\"col-md-3 mb-2 mb-md-0\">
                    <a href=\"/\" class=\"d-inline-flex link-body-emphasis text-decoration-none\">
                        <svg class=\"bi\" width=\"40\" height=\"32\" role=\"img\" aria-label=\"Bootstrap\"><use xlink:href=\"#bootstrap\"/></svg>
                    </a>
                </div>

                <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\" style=\"margin-right: 70px\">
                    <li><a href=\"";
        // line 247
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link px-2 link-secondary pink-link\">Home</a></li>
                    <li><a href=\"#\" class=\"nav-link px-2 pink-link\">Contact</a></li>
                    <li><a href=\"#\" class=\"nav-link px-2 pink-link\">FAQs</a></li>
                    <li><a href=\"#\" class=\"nav-link px-2 pink-link\" style=\"margin-right: 10px;\">About</a></li>
                </ul>


                <div class=\"col-md-3 text-end\">
                    <a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-outline-primary me-2 btn-custom\">Login</a>
                    <a href=\"";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-primary btn-custom\">Sign-up</a>
                </div>


            </header>
        </main>
    </div>

    <div class=\"container\">
        <h1 style=\"margin-top: 20px\">Your Pathway to Financial Freedom and Stability</h1>
        <br>
        <p>
            Discover the convenience and empowerment of managing your finances effortlessly with <b>MYMONEY</b>.
            Whether you're a seasoned investor or just starting out, our intuitive platform provides personalized solutions tailored to your goals.
            Say goodbye to financial stress with easy-to-use budgeting tools, track your progress, and access educational resources to enhance your financial literacy.
            Rest assured, your data is secure, and join a supportive community dedicated to financial success.
            With our mobile app, stay connected and take control of your finances wherever you go.

        </p>
        <br>
        <div class=\"image-container\">
            <img src=\"https://i.pinimg.com/564x/4e/e8/de/4ee8de1944a5f1f7daf247a292319f76.jpg\" alt=\"Bank\" width=\"300\" height=\"200\">
            <img src=\"https://i.pinimg.com/564x/54/f0/0c/54f00c29a66595ceea2e1a139434ed80.jpg\" alt=\"Graph\" width=\"300\" height=\"200\">
        </div>
    </div>
<br>
    <br>
    <!-- Sidebar toggle button -->
    <button class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
        <i class=\"fas fa-bars\"></i>
    </button>

    <footer class=\"py-3 my-4\">
        <div class=\"container\">
            <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\" >
                <li><a href=\"#\" class=\"nav-link px-2 link-secondary pink-link\">Home</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 pink-link\">Contact</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 pink-link\">FAQs</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 pink-link\" >About</a></li>
            </ul>
            <p class=\"text-center text-body-secondary\">&copy; 2024 Company, Inc</p>
        </div>
    </footer>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            const sidebar = document.querySelector('.sidebar');
            const sidebarToggle = document.querySelector('.sidebar-toggle');

            // Fonction pour ouvrir et fermer la barre latérale
            function toggleSidebar() {
                sidebar.classList.toggle('active');
            }

            // Événement de clic sur le bouton de basculement de la barre latérale
            sidebarToggle.addEventListener('click', toggleSidebar);

            // Événement de clic sur le contenu principal pour fermer la barre latérale
            document.addEventListener('click', function(event) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickInsideSidebarToggle = sidebarToggle.contains(event.target);

                // Si le clic n'est pas à l'intérieur de la barre latérale ni sur le bouton de basculement, fermez la barre latérale
                if (!isClickInsideSidebar && !isClickInsideSidebarToggle) {
                    sidebar.classList.remove('active');
                }
            });
        });
    </script>

</body>
</html>













";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion de Budget";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 62
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  389 => 62,  379 => 61,  360 => 59,  264 => 256,  260 => 255,  249 => 247,  227 => 228,  60 => 63,  58 => 61,  53 => 59,  45 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("{#  <!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Gestion de Budget{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {% block stylesheets %}
    {% endblock %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"{{ path ('home') }}\">
            <i class=\"fas fa-credit-card fa-lg\"></i>
        </a>
        <a class=\"navbar-brand mx-auto\" href=\"{{ path('home') }}\">ManageBudget</a>
        <a class=\"navbar-brand mx-auto\" href={{ path('app_login') }}>Login</a>
        <a class=\"navbar-brand mx-auto\" href=\"{{ path('app_register') }}\">Sign up</a>

    </nav>
</header>

<div class=\"container\">
    <h1>Welcome ! </h1>
    <p> This is the homepage our site :)  </p>
</div>

<footer class=\"\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <h4>Helpful Links </h4>
        <ul class=\"navbar-nav mx-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Terms and Conditions</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Privacy Policy</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
        </ul>


    </nav>


    <p>&copy; 2024 Budget Management. All rights reserved.
    </p>
</footer>  #}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Gestion de Budget{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {% block stylesheets %}
    {% endblock %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap\" rel=\"stylesheet\">


    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: -250px; /* sidebar initially hidden */
            z-index: 100;
            padding: 48px 0; /* Adjust as needed */
            overflow-x: hidden;
            overflow-y: auto; /* Show scrollbar if necessary */
            background-color: black; /* Background color */
            border-right: 1px solid #FF698D; /* Right border */
            transition: left 0.3s; /* Smooth transition */
        }

        .sidebar.active {
            left: 0; /* Sidebar visible */
        }

        .sidebar-heading {
            text-align: center;
            padding: 10px 15px;
        }

        .sidebar ul {
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .sidebar ul li {
            margin: 0;
            padding: 0;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center; /* Align icon and text vertically */
            padding: .5rem 4rem;
            color: #ffffff;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            background-color: #FF698D; /* Highlight on hover */
        }

        /* Button style */
        .sidebar-toggle {
            position: fixed;
            left: 10px;
            top: 10px;
            background-color: #FF698D;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 15px;
            cursor: pointer;
        }

        .sidebar-toggle:focus {
            outline: none;
        }

        /* Icon style */
        .sidebar ul li a i {
            margin-right: 10px; /* Add spacing between icon and text */
        }

        /* Custom button styles */
        .btn-custom {
            background-color: transparent;
            color: #FF698D;
            border-color: #FF698D;
        }

        .btn-custom:hover {
            background-color: #FF698D;
            border-color: #FF698D;
            color: white;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e4e4e4;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }
        .header-content {
            /* Annuler les effets du flexbox sur le contenu du header */
            display: initial;
            justify-content: initial;
            align-items: initial;
            height: initial;
        }

        .container {
            text-align: center;
            margin-top: 0px;

        }

        .image-container {
            display: flex;
            justify-content: center;
            flex-direction: row; /* Modification ici pour la disposition horizontale */
            margin-top: 20px; /* Ajout de marge pour l'espace entre les lignes */
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            transition: transform 0.3s ease;
            border-radius: 10px;
            margin: 0 10px;
        }

        .image-container img:hover {
            transform: translateY(-20px);
        }
        .pink-link {
            color: #FF698D;
        }



    </style>
</head>
<body>
<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Sidebar -->
        <nav class=\"col-md-3 col-lg-2 d-md-block sidebar\">
            <div class=\"sidebar-heading\" style=\"margin-top: -30px; margin-bottom: 40px; font-weight: bold; font-size: 20px;\">
                <span style=\"color: #FF698D;\">MY</span><span style=\"color: white;\">MONEY</span>
            </div>
            <div class=\"sidebar-sticky\"></div>

            <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-chart-line\"></i> Dashboard</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-file-alt\"></i> Orders</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-box\"></i> Products</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-users\"></i> Customers</a>
                </li>
            </ul>

            <!-- Séparateur -->
            <hr class=\"dropdown-divider\" style=\"margin-top: 470px; margin-bottom: 20px;\">

            <!-- Dropdown menu -->
            <div class=\"dropdown mt-auto\">
                <a href=\"{{ path ('home') }}\" class=\"d-flex align-items-center justify-content-center text-white text-decoration-none\">
                    <i class=\"fas fa-user-circle me-2\" style=\"margin-right: 10px;\"></i> <!-- Icône Font Awesome pour \"Profile\" avec une marge à droite -->
                    <strong class=\"ms-2\">Profile</strong> <!-- Texte \"Profile\" avec une marge à gauche -->
                </a>
            </div>

        </nav>
        <!-- Main Content -->
        <main class=\"col\">
            <header class=\"d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom\">

                <div class=\"b-example-divider\"></div>
                <div class=\"col-md-3 mb-2 mb-md-0\">
                    <a href=\"/\" class=\"d-inline-flex link-body-emphasis text-decoration-none\">
                        <svg class=\"bi\" width=\"40\" height=\"32\" role=\"img\" aria-label=\"Bootstrap\"><use xlink:href=\"#bootstrap\"/></svg>
                    </a>
                </div>

                <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\" style=\"margin-right: 70px\">
                    <li><a href=\"{{ path ('home') }}\" class=\"nav-link px-2 link-secondary pink-link\">Home</a></li>
                    <li><a href=\"#\" class=\"nav-link px-2 pink-link\">Contact</a></li>
                    <li><a href=\"#\" class=\"nav-link px-2 pink-link\">FAQs</a></li>
                    <li><a href=\"#\" class=\"nav-link px-2 pink-link\" style=\"margin-right: 10px;\">About</a></li>
                </ul>


                <div class=\"col-md-3 text-end\">
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-primary me-2 btn-custom\">Login</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary btn-custom\">Sign-up</a>
                </div>


            </header>
        </main>
    </div>

    <div class=\"container\">
        <h1 style=\"margin-top: 20px\">Your Pathway to Financial Freedom and Stability</h1>
        <br>
        <p>
            Discover the convenience and empowerment of managing your finances effortlessly with <b>MYMONEY</b>.
            Whether you're a seasoned investor or just starting out, our intuitive platform provides personalized solutions tailored to your goals.
            Say goodbye to financial stress with easy-to-use budgeting tools, track your progress, and access educational resources to enhance your financial literacy.
            Rest assured, your data is secure, and join a supportive community dedicated to financial success.
            With our mobile app, stay connected and take control of your finances wherever you go.

        </p>
        <br>
        <div class=\"image-container\">
            <img src=\"https://i.pinimg.com/564x/4e/e8/de/4ee8de1944a5f1f7daf247a292319f76.jpg\" alt=\"Bank\" width=\"300\" height=\"200\">
            <img src=\"https://i.pinimg.com/564x/54/f0/0c/54f00c29a66595ceea2e1a139434ed80.jpg\" alt=\"Graph\" width=\"300\" height=\"200\">
        </div>
    </div>
<br>
    <br>
    <!-- Sidebar toggle button -->
    <button class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
        <i class=\"fas fa-bars\"></i>
    </button>

    <footer class=\"py-3 my-4\">
        <div class=\"container\">
            <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\" >
                <li><a href=\"#\" class=\"nav-link px-2 link-secondary pink-link\">Home</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 pink-link\">Contact</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 pink-link\">FAQs</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 pink-link\" >About</a></li>
            </ul>
            <p class=\"text-center text-body-secondary\">&copy; 2024 Company, Inc</p>
        </div>
    </footer>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            const sidebar = document.querySelector('.sidebar');
            const sidebarToggle = document.querySelector('.sidebar-toggle');

            // Fonction pour ouvrir et fermer la barre latérale
            function toggleSidebar() {
                sidebar.classList.toggle('active');
            }

            // Événement de clic sur le bouton de basculement de la barre latérale
            sidebarToggle.addEventListener('click', toggleSidebar);

            // Événement de clic sur le contenu principal pour fermer la barre latérale
            document.addEventListener('click', function(event) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickInsideSidebarToggle = sidebarToggle.contains(event.target);

                // Si le clic n'est pas à l'intérieur de la barre latérale ni sur le bouton de basculement, fermez la barre latérale
                if (!isClickInsideSidebar && !isClickInsideSidebarToggle) {
                    sidebar.classList.remove('active');
                }
            });
        });
    </script>

</body>
</html>













", "home/home.html.twig", "C:\\laragon\\www\\Projet_Dev\\templates\\home\\home.html.twig");
    }
}
