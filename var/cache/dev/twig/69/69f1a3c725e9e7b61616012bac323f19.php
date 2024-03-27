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

/* profile/profile.html.twig */
class __TwigTemplate_314ccdc0c3a227cb12d692ee787ff40b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Axentix Layout - Sidenav</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.4.0/dist/axentix.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
</head>
<body class=\"layout-sidenav\">

<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <i class=\"fas fa-credit-card fa-lg\"></i>
        </a>
        <a class=\"navbar-brand mx-auto\" href=\"#\">ManageBudget</a>
    </nav>
</header>

<div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 sidenav-fixed white\">
    <div class=\"sidenav-header\">
        <b>My profile</b>
    </div>
    <a  href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("budget_useraccount");
        echo "\" class=\"sidenav-link active\">User Account</a>
    <a href=\"#\" class=\"sidenav-link\">My Expenses</a>
    <a href=\"#\" class=\"sidenav-link\">My Review</a>

    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <div class=\"mb-3\" style=\"margin-top: 400px;\">
            You are logged in as ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "userIdentifier", [], "any", false, false, false, 32), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 35
        echo "</div>

<main>

    <main>
        <div style=\"text-align: center; margin-top: 50px;\">
            <h1>Welcome  ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo " !</h1>
        </div>

        <div >
            <p>You have 5 different profiles:</p>
            <ul>
                <li>If you are a student and need help managing your budget, select this profile.</li>
                <li>If you are a traveler and need guidance on budget management, select this profile.</li>
                <li>If you are an investor and unsure where to allocate your budget, select this profile.</li>
                <li>If you are a parent and need assistance with budgeting, select this profile.</li>
                <li>If you are a couple and need guidance on budget management, select this profile.</li>
            </ul>
            <p>Select the profile that best fits your situation to get assistance.</p>
        </div>
        </div>

        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_start');
        echo "

        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "profileType", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "profileBudget", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter your budget in \$..."]]);
        // line 65
        echo "


        <button type=\"submit\" class=\"btn btn-primary\">Register</button>

        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "


</main>

<script src=\"https://cdn.jsdelivr.net/npm/axentix@2.4.0/dist/axentix.min.js\"></script>
<script>
    document.getElementById('openSidenav').addEventListener('click', function() {
        document.getElementById('example-sidenav').axOpen();
    });
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/profile.html.twig";
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
        return array (  135 => 70,  128 => 65,  126 => 60,  122 => 59,  117 => 57,  98 => 41,  90 => 35,  82 => 32,  79 => 31,  77 => 30,  70 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Axentix Layout - Sidenav</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.4.0/dist/axentix.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
</head>
<body class=\"layout-sidenav\">

<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <i class=\"fas fa-credit-card fa-lg\"></i>
        </a>
        <a class=\"navbar-brand mx-auto\" href=\"#\">ManageBudget</a>
    </nav>
</header>

<div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 sidenav-fixed white\">
    <div class=\"sidenav-header\">
        <b>My profile</b>
    </div>
    <a  href=\"{{ path('budget_useraccount') }}\" class=\"sidenav-link active\">User Account</a>
    <a href=\"#\" class=\"sidenav-link\">My Expenses</a>
    <a href=\"#\" class=\"sidenav-link\">My Review</a>

    {% if app.user %}
        <div class=\"mb-3\" style=\"margin-top: 400px;\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
</div>

<main>

    <main>
        <div style=\"text-align: center; margin-top: 50px;\">
            <h1>Welcome  {{ app.user.name}} !</h1>
        </div>

        <div >
            <p>You have 5 different profiles:</p>
            <ul>
                <li>If you are a student and need help managing your budget, select this profile.</li>
                <li>If you are a traveler and need guidance on budget management, select this profile.</li>
                <li>If you are an investor and unsure where to allocate your budget, select this profile.</li>
                <li>If you are a parent and need assistance with budgeting, select this profile.</li>
                <li>If you are a couple and need guidance on budget management, select this profile.</li>
            </ul>
            <p>Select the profile that best fits your situation to get assistance.</p>
        </div>
        </div>

        {{ form_start(form) }}

        {{ form_row(form.profileType, {'attr': {'class': 'form-control'}}) }}
        {{ form_row(form.profileBudget, {
            'attr': {
                'class': 'form-control',
                'placeholder': 'Enter your budget in \$...',
            }
        }) }}


        <button type=\"submit\" class=\"btn btn-primary\">Register</button>

        {{ form_end(form) }}


</main>

<script src=\"https://cdn.jsdelivr.net/npm/axentix@2.4.0/dist/axentix.min.js\"></script>
<script>
    document.getElementById('openSidenav').addEventListener('click', function() {
        document.getElementById('example-sidenav').axOpen();
    });
</script>

</body>
</html>
", "profile/profile.html.twig", "C:\\laragon\\www\\Mymoney\\templates\\Profile\\profile.html.twig");
    }
}
