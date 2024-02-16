<?php

/* ProductosBundle:Default:index.html.twig */
class __TwigTemplate_cb669e3800b99b01b7e1e60c03caccaf88165fd131b8ed0b4ead3926376c2136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "ProductosBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_593f93e5b66775a2bf4bd0e5c5308b6b792039f23b641c86e300d329297aaa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593f93e5b66775a2bf4bd0e5c5308b6b792039f23b641c86e300d329297aaa59->enter($__internal_593f93e5b66775a2bf4bd0e5c5308b6b792039f23b641c86e300d329297aaa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductosBundle:Default:index.html.twig"));

        $__internal_b651e5ec4552cb7baf8a7c1c4dfac245b8b12ec998e0a83b53b4426e3e7c19dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b651e5ec4552cb7baf8a7c1c4dfac245b8b12ec998e0a83b53b4426e3e7c19dd->enter($__internal_b651e5ec4552cb7baf8a7c1c4dfac245b8b12ec998e0a83b53b4426e3e7c19dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductosBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593f93e5b66775a2bf4bd0e5c5308b6b792039f23b641c86e300d329297aaa59->leave($__internal_593f93e5b66775a2bf4bd0e5c5308b6b792039f23b641c86e300d329297aaa59_prof);

        
        $__internal_b651e5ec4552cb7baf8a7c1c4dfac245b8b12ec998e0a83b53b4426e3e7c19dd->leave($__internal_b651e5ec4552cb7baf8a7c1c4dfac245b8b12ec998e0a83b53b4426e3e7c19dd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cff6a0cae5bc4b4f88eab6db1073e63d69053e01328495bfec29cfa31238b10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff6a0cae5bc4b4f88eab6db1073e63d69053e01328495bfec29cfa31238b10b->enter($__internal_cff6a0cae5bc4b4f88eab6db1073e63d69053e01328495bfec29cfa31238b10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28194c786298db1d2e0515eacb5dbf8f1f805159a46623084cf86a682e8634fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28194c786298db1d2e0515eacb5dbf8f1f805159a46623084cf86a682e8634fb->enter($__internal_28194c786298db1d2e0515eacb5dbf8f1f805159a46623084cf86a682e8634fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Productos";
        
        $__internal_28194c786298db1d2e0515eacb5dbf8f1f805159a46623084cf86a682e8634fb->leave($__internal_28194c786298db1d2e0515eacb5dbf8f1f805159a46623084cf86a682e8634fb_prof);

        
        $__internal_cff6a0cae5bc4b4f88eab6db1073e63d69053e01328495bfec29cfa31238b10b->leave($__internal_cff6a0cae5bc4b4f88eab6db1073e63d69053e01328495bfec29cfa31238b10b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c56ace40cd3bbad78e9e0ca62f23924c3891ae7dc986a7da1b1d79c10d17d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c56ace40cd3bbad78e9e0ca62f23924c3891ae7dc986a7da1b1d79c10d17d36->enter($__internal_8c56ace40cd3bbad78e9e0ca62f23924c3891ae7dc986a7da1b1d79c10d17d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bae20ac30212fbc35d04c3b9d6989e1cce9cfbbfb070e46e44294c58491ec8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae20ac30212fbc35d04c3b9d6989e1cce9cfbbfb070e46e44294c58491ec8db->enter($__internal_bae20ac30212fbc35d04c3b9d6989e1cce9cfbbfb070e46e44294c58491ec8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Lista de Productos</h1>
    <ul>
        ";
        // line 12
        echo "    </ul>
";
        
        $__internal_bae20ac30212fbc35d04c3b9d6989e1cce9cfbbfb070e46e44294c58491ec8db->leave($__internal_bae20ac30212fbc35d04c3b9d6989e1cce9cfbbfb070e46e44294c58491ec8db_prof);

        
        $__internal_8c56ace40cd3bbad78e9e0ca62f23924c3891ae7dc986a7da1b1d79c10d17d36->leave($__internal_8c56ace40cd3bbad78e9e0ca62f23924c3891ae7dc986a7da1b1d79c10d17d36_prof);

    }

    public function getTemplateName()
    {
        return "ProductosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block title %}Lista de Productos{% endblock %}

{% block body %}
    <h1>Lista de Productos</h1>
    <ul>
        {# {% for producto in productos %}
            <li>{{ producto.name }}</li>
        {% endfor %} #}
    </ul>
{% endblock %}
", "ProductosBundle:Default:index.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\src\\ProductosBundle/Resources/views/Default/index.html.twig");
    }
}
