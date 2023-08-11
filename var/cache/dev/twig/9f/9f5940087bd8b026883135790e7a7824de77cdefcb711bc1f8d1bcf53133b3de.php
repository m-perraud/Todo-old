<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a3945e100458f78aeb18dc20f0c9f79aed3f8d5970882d9293a93c6d818f629c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a527a63c81b46f36091ac657084b7e6ba3663764583ffd1de9e1ea5384b4a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a527a63c81b46f36091ac657084b7e6ba3663764583ffd1de9e1ea5384b4a59->enter($__internal_7a527a63c81b46f36091ac657084b7e6ba3663764583ffd1de9e1ea5384b4a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a527a63c81b46f36091ac657084b7e6ba3663764583ffd1de9e1ea5384b4a59->leave($__internal_7a527a63c81b46f36091ac657084b7e6ba3663764583ffd1de9e1ea5384b4a59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49bf7479bff3b55d8e7fa7a0fd78cb04d4f1a5970c43d7ff96d2f572dcea038a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bf7479bff3b55d8e7fa7a0fd78cb04d4f1a5970c43d7ff96d2f572dcea038a->enter($__internal_49bf7479bff3b55d8e7fa7a0fd78cb04d4f1a5970c43d7ff96d2f572dcea038a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_49bf7479bff3b55d8e7fa7a0fd78cb04d4f1a5970c43d7ff96d2f572dcea038a->leave($__internal_49bf7479bff3b55d8e7fa7a0fd78cb04d4f1a5970c43d7ff96d2f572dcea038a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28edaac56abb019188884162c3b17db3d62315c11e59cd14abd252eef9c7cb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28edaac56abb019188884162c3b17db3d62315c11e59cd14abd252eef9c7cb39->enter($__internal_28edaac56abb019188884162c3b17db3d62315c11e59cd14abd252eef9c7cb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28edaac56abb019188884162c3b17db3d62315c11e59cd14abd252eef9c7cb39->leave($__internal_28edaac56abb019188884162c3b17db3d62315c11e59cd14abd252eef9c7cb39_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e3cb828db673aaeca9fe7bb05d6642652d758a4f403f5e01f3923c3d6b813e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3cb828db673aaeca9fe7bb05d6642652d758a4f403f5e01f3923c3d6b813e5->enter($__internal_5e3cb828db673aaeca9fe7bb05d6642652d758a4f403f5e01f3923c3d6b813e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5e3cb828db673aaeca9fe7bb05d6642652d758a4f403f5e01f3923c3d6b813e5->leave($__internal_5e3cb828db673aaeca9fe7bb05d6642652d758a4f403f5e01f3923c3d6b813e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
