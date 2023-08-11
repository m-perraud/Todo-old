<?php

/* user/create.html.twig */
class __TwigTemplate_68cf04eaaf37a6472da53cc29b5b7e80f5d24fb0535704d9c4860c7400f88821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/create.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'header_img' => array($this, 'block_header_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445b38c9360ff6631fb9c8570d855ee4435de1dae71f274133fd69cf3f885c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445b38c9360ff6631fb9c8570d855ee4435de1dae71f274133fd69cf3f885c49->enter($__internal_445b38c9360ff6631fb9c8570d855ee4435de1dae71f274133fd69cf3f885c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445b38c9360ff6631fb9c8570d855ee4435de1dae71f274133fd69cf3f885c49->leave($__internal_445b38c9360ff6631fb9c8570d855ee4435de1dae71f274133fd69cf3f885c49_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_9f306a05bd43776669fd350909ba4b674d7b456bc8553605ccbaf0108a4045b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f306a05bd43776669fd350909ba4b674d7b456bc8553605ccbaf0108a4045b3->enter($__internal_9f306a05bd43776669fd350909ba4b674d7b456bc8553605ccbaf0108a4045b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        echo "<h1>Créer un utilisateur</h1>";
        
        $__internal_9f306a05bd43776669fd350909ba4b674d7b456bc8553605ccbaf0108a4045b3->leave($__internal_9f306a05bd43776669fd350909ba4b674d7b456bc8553605ccbaf0108a4045b3_prof);

    }

    // line 4
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_5266b66ea3a3cb4555e9daf9c3e3320c83a3b38306707c85ea369382e89c9797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5266b66ea3a3cb4555e9daf9c3e3320c83a3b38306707c85ea369382e89c9797->enter($__internal_5266b66ea3a3cb4555e9daf9c3e3320c83a3b38306707c85ea369382e89c9797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        
        $__internal_5266b66ea3a3cb4555e9daf9c3e3320c83a3b38306707c85ea369382e89c9797->leave($__internal_5266b66ea3a3cb4555e9daf9c3e3320c83a3b38306707c85ea369382e89c9797_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_441baaac39a7d524bdf25b1c4ff6d38f5c3a48a2f6717923268b5427460df9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441baaac39a7d524bdf25b1c4ff6d38f5c3a48a2f6717923268b5427460df9d6->enter($__internal_441baaac39a7d524bdf25b1c4ff6d38f5c3a48a2f6717923268b5427460df9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create")));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_441baaac39a7d524bdf25b1c4ff6d38f5c3a48a2f6717923268b5427460df9d6->leave($__internal_441baaac39a7d524bdf25b1c4ff6d38f5c3a48a2f6717923268b5427460df9d6_prof);

    }

    public function getTemplateName()
    {
        return "user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block header_title %}<h1>Créer un utilisateur</h1>{% endblock %}
{% block header_img %}{% endblock %}

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('user_create')}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "user/create.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\app\\Resources\\views\\user\\create.html.twig");
    }
}
