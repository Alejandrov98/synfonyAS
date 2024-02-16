<?php

/* ProductosBundle:Default:index.html.twig */
class __TwigTemplate_2cf3e56b5426ba52a6ff915b6eaaf6d4de137824137b4e8a7329a2ddf286710f extends Twig_Template
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
        $__internal_192dbdba0a567e55349f9742a9af7abaec023acc01ba6f5a7627a85e5b826349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192dbdba0a567e55349f9742a9af7abaec023acc01ba6f5a7627a85e5b826349->enter($__internal_192dbdba0a567e55349f9742a9af7abaec023acc01ba6f5a7627a85e5b826349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductosBundle:Default:index.html.twig"));

        $__internal_74cfd80d84813f7f34fe1e847b1fe0cde25a0d85d8037c00162531b687bb436e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cfd80d84813f7f34fe1e847b1fe0cde25a0d85d8037c00162531b687bb436e->enter($__internal_74cfd80d84813f7f34fe1e847b1fe0cde25a0d85d8037c00162531b687bb436e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductosBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_192dbdba0a567e55349f9742a9af7abaec023acc01ba6f5a7627a85e5b826349->leave($__internal_192dbdba0a567e55349f9742a9af7abaec023acc01ba6f5a7627a85e5b826349_prof);

        
        $__internal_74cfd80d84813f7f34fe1e847b1fe0cde25a0d85d8037c00162531b687bb436e->leave($__internal_74cfd80d84813f7f34fe1e847b1fe0cde25a0d85d8037c00162531b687bb436e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8abbe6db33df57b205e5035e5b63e51a7073ac04d5fb6140457fe8357cccbec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abbe6db33df57b205e5035e5b63e51a7073ac04d5fb6140457fe8357cccbec9->enter($__internal_8abbe6db33df57b205e5035e5b63e51a7073ac04d5fb6140457fe8357cccbec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4da466ff034ece7c4f4e5bf87575cc10c3181592051a6e9fde10b6964250f635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da466ff034ece7c4f4e5bf87575cc10c3181592051a6e9fde10b6964250f635->enter($__internal_4da466ff034ece7c4f4e5bf87575cc10c3181592051a6e9fde10b6964250f635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Productos";
        
        $__internal_4da466ff034ece7c4f4e5bf87575cc10c3181592051a6e9fde10b6964250f635->leave($__internal_4da466ff034ece7c4f4e5bf87575cc10c3181592051a6e9fde10b6964250f635_prof);

        
        $__internal_8abbe6db33df57b205e5035e5b63e51a7073ac04d5fb6140457fe8357cccbec9->leave($__internal_8abbe6db33df57b205e5035e5b63e51a7073ac04d5fb6140457fe8357cccbec9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba2ff25375948c4abc8f171bef61841762684d6ced0c614be9199113efb1a28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2ff25375948c4abc8f171bef61841762684d6ced0c614be9199113efb1a28e->enter($__internal_ba2ff25375948c4abc8f171bef61841762684d6ced0c614be9199113efb1a28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fec10dc084c48f26fe3c39432d0e73a8bcae71df460c64d9471613e2cf326d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec10dc084c48f26fe3c39432d0e73a8bcae71df460c64d9471613e2cf326d38->enter($__internal_fec10dc084c48f26fe3c39432d0e73a8bcae71df460c64d9471613e2cf326d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Lista de Productos</h1>
    <ul>
        ";
        // line 12
        echo "    </ul>
";
        
        $__internal_fec10dc084c48f26fe3c39432d0e73a8bcae71df460c64d9471613e2cf326d38->leave($__internal_fec10dc084c48f26fe3c39432d0e73a8bcae71df460c64d9471613e2cf326d38_prof);

        
        $__internal_ba2ff25375948c4abc8f171bef61841762684d6ced0c614be9199113efb1a28e->leave($__internal_ba2ff25375948c4abc8f171bef61841762684d6ced0c614be9199113efb1a28e_prof);

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
