<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7727a4f649efc2a3fd46a0ce5a5117b74355716385614b0dce7ff6d01e7632d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dba1ee39e33076115d85277cfef04bdd92ae33b8b2401e6a909b93595442948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dba1ee39e33076115d85277cfef04bdd92ae33b8b2401e6a909b93595442948->enter($__internal_7dba1ee39e33076115d85277cfef04bdd92ae33b8b2401e6a909b93595442948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dba1ee39e33076115d85277cfef04bdd92ae33b8b2401e6a909b93595442948->leave($__internal_7dba1ee39e33076115d85277cfef04bdd92ae33b8b2401e6a909b93595442948_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1beda2cd25e363ce447340d37fd1adaaccbe5a58e568a5c7e6333a59803e30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1beda2cd25e363ce447340d37fd1adaaccbe5a58e568a5c7e6333a59803e30d->enter($__internal_c1beda2cd25e363ce447340d37fd1adaaccbe5a58e568a5c7e6333a59803e30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_c1beda2cd25e363ce447340d37fd1adaaccbe5a58e568a5c7e6333a59803e30d->leave($__internal_c1beda2cd25e363ce447340d37fd1adaaccbe5a58e568a5c7e6333a59803e30d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_801e6569556968e818ba9b438a177f21d3ebe3f1b753d574100ed5cdec553899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801e6569556968e818ba9b438a177f21d3ebe3f1b753d574100ed5cdec553899->enter($__internal_801e6569556968e818ba9b438a177f21d3ebe3f1b753d574100ed5cdec553899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_801e6569556968e818ba9b438a177f21d3ebe3f1b753d574100ed5cdec553899->leave($__internal_801e6569556968e818ba9b438a177f21d3ebe3f1b753d574100ed5cdec553899_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e195d16044ebed0890fc6d40eba77b77078198ff174e46da18d6b8eb86cc47a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e195d16044ebed0890fc6d40eba77b77078198ff174e46da18d6b8eb86cc47a0->enter($__internal_e195d16044ebed0890fc6d40eba77b77078198ff174e46da18d6b8eb86cc47a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e195d16044ebed0890fc6d40eba77b77078198ff174e46da18d6b8eb86cc47a0->leave($__internal_e195d16044ebed0890fc6d40eba77b77078198ff174e46da18d6b8eb86cc47a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
