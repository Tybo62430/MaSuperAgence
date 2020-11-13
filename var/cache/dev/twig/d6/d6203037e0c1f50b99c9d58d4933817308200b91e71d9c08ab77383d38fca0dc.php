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

/* emails/contact.html.twig */
class __TwigTemplate_ba89654f682cb4be1c47fc9570c3b64b73c339ef297565de538d87c67c34437b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<table>
\t<tbody>
\t\t<tr>
\t\t\t<td>Nom du bien</td>
\t\t\t<td><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("property_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 7, $this->source); })()), "property", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 7, $this->source); })()), "property", [], "any", false, false, false, 7), "slug", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 7, $this->source); })()), "property", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</a></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Prénom</td>
\t\t\t<td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 11, $this->source); })()), "lastname", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Nom</td>
\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 15, $this->source); })()), "firstname", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Téléphone</td>
\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 19, $this->source); })()), "phone", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Email</td>
\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 23, $this->source); })()), "mail", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Message</td>
\t\t\t<td>";
        // line 27
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 27, $this->source); })()), "message", [], "any", false, false, false, 27), "html", null, true));
        echo "</td>
\t\t</tr>
\t</tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  104 => 23,  97 => 19,  90 => 15,  83 => 11,  74 => 7,  67 => 2,  57 => 1,  46 => 33,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

<table>
\t<tbody>
\t\t<tr>
\t\t\t<td>Nom du bien</td>
\t\t\t<td><a href=\"{{ url('property_show', {id: contact.property.id, slug: contact.property.slug})}}\">{{contact.property.title}}</a></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Prénom</td>
\t\t\t<td>{{contact.lastname}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Nom</td>
\t\t\t<td>{{contact.firstname}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Téléphone</td>
\t\t\t<td>{{contact.phone}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Email</td>
\t\t\t<td>{{contact.mail}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Message</td>
\t\t\t<td>{{contact.message | nl2br}}</td>
\t\t</tr>
\t</tbody>
</table>

{% endblock %}

", "emails/contact.html.twig", "/var/www/sites/MaSuperAgence/templates/emails/contact.html.twig");
    }
}
