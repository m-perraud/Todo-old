<?php

/* security/login.html.twig */
class __TwigTemplate_d344d1eee010836aefdf33d3def946e18a803d05f0554cbb3bfde21b5943b857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c559115a28934e5982469668377a61cc801dad446565f0eb34347929777ce4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c559115a28934e5982469668377a61cc801dad446565f0eb34347929777ce4a->enter($__internal_4c559115a28934e5982469668377a61cc801dad446565f0eb34347929777ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c559115a28934e5982469668377a61cc801dad446565f0eb34347929777ce4a->leave($__internal_4c559115a28934e5982469668377a61cc801dad446565f0eb34347929777ce4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfd13c1913aef52d4b37644b84a266281fca1816e6959d24390e69660f5b247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfd13c1913aef52d4b37644b84a266281fca1816e6959d24390e69660f5b247->enter($__internal_8bfd13c1913aef52d4b37644b84a266281fca1816e6959d24390e69660f5b247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "security/login.html.twig"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Nom d'utilisateur :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button class=\"btn btn-success\" type=\"submit\">Se connecter</button>
    </form>
";
        
        $__internal_8bfd13c1913aef52d4b37644b84a266281fca1816e6959d24390e69660f5b247->leave($__internal_8bfd13c1913aef52d4b37644b84a266281fca1816e6959d24390e69660f5b247_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if error %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Nom d'utilisateur :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button class=\"btn btn-success\" type=\"submit\">Se connecter</button>
    </form>
{% endblock %}
", "security/login.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\app\\Resources\\views\\security\\login.html.twig");
    }
}
