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

/* registration/register.html.twig */
class __TwigTemplate_ef55d4d25b9f40e73281a62852049b43 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " ";
        // line 7
        echo "
    <style>
        /* Votre CSS personnalisé */
        /* Par exemple */
        body {
            background-color: #e4e4e4;
        }
        .pink-link{
            color: #FF698D;
        }
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
        .btn {
            background-color: #FF698D;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
        }
        .form-control {
            padding: 5px 10px; /* Ajustez les valeurs selon vos besoins */
        }

        /* Ajoutez d'autres styles selon vos besoins */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "    <header class=\"d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom\">
        <div class=\"b-example-divider\"></div>
        <div class=\"col-md-3 mb-2 mb-md-0\">
            <a href=\"/\" class=\"d-inline-flex link-body-emphasis text-decoration-none\">
                <svg class=\"bi\" width=\"40\" height=\"32\" role=\"img\" aria-label=\"Bootstrap\"><use xlink:href=\"#bootstrap\"/></svg>
            </a>
        </div>

        <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\" style=\"margin-right: 70px\">
            <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link px-2 link-secondary pink-link\">Home</a></li>
            <li><a href=\"#\" class=\"nav-link px-2 pink-link\">Contact</a></li>
            <li><a href=\"#\" class=\"nav-link px-2 pink-link\">FAQs</a></li>
            <li><a href=\"#\" class=\"nav-link px-2 pink-link\" style=\"margin-right: 10px;\">About</a></li>
        </ul>

        <div class=\"col-md-3 text-end\">
            <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-outline-primary me-2 btn-custom\">Login</a>
            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-primary btn-custom\">Sign-up</a>
        </div>
    </header>

    <h1 class=\"text-center\" style=\"margin-top: -20px\">Sign up</h1>

    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "lastName", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "age", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-control", "min" => 0]]);
        echo "
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "plainPassword", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "form-control"], "label" => "Password"]);
        echo "
    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "AgreeTerms", [], "any", false, false, false, 75), 'row');
        echo "
    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "_token", [], "any", false, false, false, 76), 'row');
        echo "

    <button type=\"submit\" class=\"btn\">Register</button>
    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  214 => 79,  208 => 76,  204 => 75,  200 => 74,  196 => 73,  192 => 72,  188 => 71,  184 => 70,  175 => 64,  171 => 63,  161 => 56,  150 => 47,  140 => 46,  93 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}
    {{ parent() }} {# Inclure d'abord les feuilles de style du parent #}

    <style>
        /* Votre CSS personnalisé */
        /* Par exemple */
        body {
            background-color: #e4e4e4;
        }
        .pink-link{
            color: #FF698D;
        }
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
        .btn {
            background-color: #FF698D;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
        }
        .form-control {
            padding: 5px 10px; /* Ajustez les valeurs selon vos besoins */
        }

        /* Ajoutez d'autres styles selon vos besoins */
    </style>
{% endblock %}

{% block body %}
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

    <h1 class=\"text-center\" style=\"margin-top: -20px\">Sign up</h1>

    {{ form_row(registrationForm.name, {'attr': {'class': 'form-control'}}) }}
    {{ form_row(registrationForm.lastName, {'attr': {'class': 'form-control'}}) }}
    {{ form_row(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
    {{ form_row(registrationForm.age, {'attr': {'class': 'form-control', 'min': 0}}) }}
    {{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-control'}, 'label': 'Password'}) }}
    {{ form_row(registrationForm.AgreeTerms) }}
    {{ form_row(registrationForm._token) }}

    <button type=\"submit\" class=\"btn\">Register</button>
    {{ form_end(registrationForm) }}
{% endblock %}
", "registration/register.html.twig", "C:\\laragon\\www\\Projet_Dev\\templates\\registration\\register.html.twig");
    }
}
