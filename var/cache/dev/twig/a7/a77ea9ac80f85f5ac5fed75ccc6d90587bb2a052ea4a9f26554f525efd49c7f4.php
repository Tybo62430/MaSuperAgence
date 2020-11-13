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

/* property/show.html.twig */
class __TwigTemplate_3142f3b1cba35e62db5437d694264014177bb8f06b982ceb66b23a3cbdfeef5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class='jumbotron'>
\t\t<div class='container'>
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
\t\t\t";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "valid", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\tFormulaire not good
\t\t\t\t</div>
\t\t\t";
        }
        // line 21
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">

\t\t\t\t\t";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 24, $this->source); })()), "filename", [], "any", false, false, false, 24)) {
            // line 25
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 25, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height: auto\">
\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("images/properties/empty.jpg", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height: auto\">
\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h1>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h1>
\t\t\t\t\t<h2>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 33, $this->source); })()), "rooms", [], "any", false, false, false, 33), "html", null, true);
        echo "
\t\t\t\t\t\tpièces -
\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 35, $this->source); })()), "surface", [], "any", false, false, false, 35), "html", null, true);
        echo "
\t\t\t\t\t\tm2</h2>
\t\t\t\t\t<div class=\"text-primary\" style=\"font-weight: bold; font-size: 4rem\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 37, $this->source); })()), "formattedPrice", [], "any", false, false, false, 37), "html", null, true);
        echo "
\t\t\t\t\t\t€
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\" id=\"contactButton\" ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "vars", [], "any", false, false, false, 40), "submitted", [], "any", false, false, false, 40)) {
            echo " style=\"display: none\" ";
        }
        echo ">Contacter l'agence</a>
\t\t\t\t\t<div id=\"contactForm\" class\"mt-4\" ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "submitted", [], "any", false, false, false, 41)) {
            echo " style=\"display: none\" ";
        }
        echo ">
\t\t\t\t\t\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "firstname", [], "any", false, false, false, 44), 'row');
        echo "</div>
\t\t\t\t\t\t\t<div class=\"col\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "lastname", [], "any", false, false, false, 45), 'row');
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "phone", [], "any", false, false, false, 48), 'row');
        echo "</div>
\t\t\t\t\t\t\t<div class=\"col\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "mail", [], "any", false, false, false, 49), 'row');
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'rest');
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container mt-4\">
\t\t\t<p>
\t\t\t\t";
        // line 64
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), "html", null, true));
        echo "
\t\t\t</p>

\t\t\t<div class=\"row\">

\t\t\t\t<div class='col-md-8'>
\t\t\t\t\t<h2>Caracteristique</h2>
\t\t\t\t\t<table class='table table-striped'>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Surface habitable</td>
\t\t\t\t\t\t\t<td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 74, $this->source); })()), "surface", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Pièces</td>
\t\t\t\t\t\t\t<td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 78, $this->source); })()), "rooms", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Chambres</td>
\t\t\t\t\t\t\t<td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 82, $this->source); })()), "bedrooms", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Etage</td>
\t\t\t\t\t\t\t<td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 86, $this->source); })()), "floor", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>chauffage</td>
\t\t\t\t\t\t\t<td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 90, $this->source); })()), "heatType", [], "any", false, false, false, 90), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div class='col-md-4'>
\t\t\t\t\t<h2>Spécificités</h2>
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 98, $this->source); })()), "options", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 99
            echo "
\t\t\t\t\t\t\t<li class=\"list-group-item\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100), "html", null, true);
            echo "</li>

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 103,  281 => 100,  278 => 99,  274 => 98,  263 => 90,  256 => 86,  249 => 82,  242 => 78,  235 => 74,  222 => 64,  210 => 55,  203 => 51,  198 => 49,  194 => 48,  188 => 45,  184 => 44,  179 => 42,  173 => 41,  167 => 40,  161 => 37,  156 => 35,  151 => 33,  147 => 32,  142 => 29,  136 => 27,  130 => 25,  128 => 24,  123 => 21,  117 => 17,  115 => 16,  112 => 15,  103 => 12,  100 => 11,  96 => 10,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{property.title}}
{% endblock %}

{% block body %}
\t<div class='jumbotron'>
\t\t<div class='container'>
\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t\t{% if not form.vars.valid %}
\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\tFormulaire not good
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">

\t\t\t\t\t{% if property.filename %}
\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(property, 'imageFile') | imagine_filter('medium')}}\" alt=\"card-img-top\" style=\"width: 100%; height: auto\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<img src=\"{{ 'images/properties/empty.jpg' | imagine_filter('medium')}}\" alt=\"card-img-top\" style=\"width: 100%; height: auto\">
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h1>{{ property.title }}</h1>
\t\t\t\t\t<h2>{{ property.rooms }}
\t\t\t\t\t\tpièces -
\t\t\t\t\t\t{{ property.surface }}
\t\t\t\t\t\tm2</h2>
\t\t\t\t\t<div class=\"text-primary\" style=\"font-weight: bold; font-size: 4rem\">{{ property.formattedPrice }}
\t\t\t\t\t\t€
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\" id=\"contactButton\" {% if form.vars.submitted %} style=\"display: none\" {% endif %}>Contacter l'agence</a>
\t\t\t\t\t<div id=\"contactForm\" class\"mt-4\" {% if not form.vars.submitted %} style=\"display: none\" {% endif %}>
\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">{{form_row(form.firstname)}}</div>
\t\t\t\t\t\t\t<div class=\"col\">{{form_row(form.lastname)}}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">{{form_row(form.phone)}}</div>
\t\t\t\t\t\t\t<div class=\"col\">{{form_row(form.mail)}}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_rest(form)}}
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_end(form)}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container mt-4\">
\t\t\t<p>
\t\t\t\t{{ property.description | nl2br }}
\t\t\t</p>

\t\t\t<div class=\"row\">

\t\t\t\t<div class='col-md-8'>
\t\t\t\t\t<h2>Caracteristique</h2>
\t\t\t\t\t<table class='table table-striped'>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Surface habitable</td>
\t\t\t\t\t\t\t<td>{{ property.surface }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Pièces</td>
\t\t\t\t\t\t\t<td>{{ property.rooms }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Chambres</td>
\t\t\t\t\t\t\t<td>{{ property.bedrooms }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Etage</td>
\t\t\t\t\t\t\t<td>{{ property.floor }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>chauffage</td>
\t\t\t\t\t\t\t<td>{{ property.heatType }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div class='col-md-4'>
\t\t\t\t\t<h2>Spécificités</h2>
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t{%  for option in property.options %}

\t\t\t\t\t\t\t<li class=\"list-group-item\">{{ option.name }}</li>

\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% endblock %}
", "property/show.html.twig", "/var/www/sites/MaSuperAgence/templates/property/show.html.twig");
    }
}
