<?php

/* @AppBundle/Resources/Views/Index.html.twig */
class __TwigTemplate_6affc93cf068bd2c0783595aca29e1c8263814040e7789a10c988cc2549c89ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AppBundle/Resources/Views/Index.html.twig", 1);
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
        $__internal_eec3d885bde37500b92f6641fe075f80dd9ea6a17382f2b089a9029c37cbf0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec3d885bde37500b92f6641fe075f80dd9ea6a17382f2b089a9029c37cbf0c3->enter($__internal_eec3d885bde37500b92f6641fe075f80dd9ea6a17382f2b089a9029c37cbf0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/Views/Index.html.twig"));

        $__internal_6d8bce8035c7fb5f22b4167aaa32e31464a7bbfafcb659f9badb90c26e425ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8bce8035c7fb5f22b4167aaa32e31464a7bbfafcb659f9badb90c26e425ad1->enter($__internal_6d8bce8035c7fb5f22b4167aaa32e31464a7bbfafcb659f9badb90c26e425ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/Views/Index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec3d885bde37500b92f6641fe075f80dd9ea6a17382f2b089a9029c37cbf0c3->leave($__internal_eec3d885bde37500b92f6641fe075f80dd9ea6a17382f2b089a9029c37cbf0c3_prof);

        
        $__internal_6d8bce8035c7fb5f22b4167aaa32e31464a7bbfafcb659f9badb90c26e425ad1->leave($__internal_6d8bce8035c7fb5f22b4167aaa32e31464a7bbfafcb659f9badb90c26e425ad1_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_f130ad791a84bdf350d91b018b8b0f3d04cafc9674225777da69661b14f98dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f130ad791a84bdf350d91b018b8b0f3d04cafc9674225777da69661b14f98dfd->enter($__internal_f130ad791a84bdf350d91b018b8b0f3d04cafc9674225777da69661b14f98dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_681176480682b493bc0cd226a7959b4a2cba8a78bdaeb3b1cf0413abce5ef1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681176480682b493bc0cd226a7959b4a2cba8a78bdaeb3b1cf0413abce5ef1e0->enter($__internal_681176480682b493bc0cd226a7959b4a2cba8a78bdaeb3b1cf0413abce5ef1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cátalogo Online";
        
        $__internal_681176480682b493bc0cd226a7959b4a2cba8a78bdaeb3b1cf0413abce5ef1e0->leave($__internal_681176480682b493bc0cd226a7959b4a2cba8a78bdaeb3b1cf0413abce5ef1e0_prof);

        
        $__internal_f130ad791a84bdf350d91b018b8b0f3d04cafc9674225777da69661b14f98dfd->leave($__internal_f130ad791a84bdf350d91b018b8b0f3d04cafc9674225777da69661b14f98dfd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_83cac5182e620598ae08767a53c0acdd799465a19e8c509d1fa7918083ff79d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cac5182e620598ae08767a53c0acdd799465a19e8c509d1fa7918083ff79d1->enter($__internal_83cac5182e620598ae08767a53c0acdd799465a19e8c509d1fa7918083ff79d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ff24a94a59001e9618ff28e1b2bbd3a760ae53ae1064da02f5472760a114bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff24a94a59001e9618ff28e1b2bbd3a760ae53ae1064da02f5472760a114bf8->enter($__internal_3ff24a94a59001e9618ff28e1b2bbd3a760ae53ae1064da02f5472760a114bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button
        type=\"button\"
        class=\"navbar-toggle collapsed\"
        data-toggle=\"collapse\"
        data-target=\"#bs-example-navbar-collapse-1\"
        aria-expanded=\"false\"
      >
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\">Cátalogo Online</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\">
          <a href=\"/productos\">Todos los productos<span class=\"sr-only\">(current)</span></a>
        </li>
        <li><a href=\"#\"></a></li>
        <li class=\"dropdown\">
          <a
            href=\"#\"
            class=\"dropdown-toggle\"
            data-toggle=\"dropdown\"
            role=\"button\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            >Categorías <span class=\"caret\"></span
          ></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Camas</a></li>
            <li><a href=\"#\">Muebles de dormitorio</a></li>
            <li><a href=\"#\">Decoración de paredes</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Cocina</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Baño</a></li>
          </ul>
        </li>
      </ul>
      <form class=\"navbar-form navbar-left\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\" />
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Link</a></li>
        <li class=\"dropdown\">
          <a
            href=\"#\"
            class=\"dropdown-toggle\"
            data-toggle=\"dropdown\"
            role=\"button\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            >Dropdown <span class=\"caret\"></span
          ></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
";
        
        $__internal_3ff24a94a59001e9618ff28e1b2bbd3a760ae53ae1064da02f5472760a114bf8->leave($__internal_3ff24a94a59001e9618ff28e1b2bbd3a760ae53ae1064da02f5472760a114bf8_prof);

        
        $__internal_83cac5182e620598ae08767a53c0acdd799465a19e8c509d1fa7918083ff79d1->leave($__internal_83cac5182e620598ae08767a53c0acdd799465a19e8c509d1fa7918083ff79d1_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/Views/Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 3,  58 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} {% block title %}Cátalogo Online{% endblock %} {%
block body %}
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button
        type=\"button\"
        class=\"navbar-toggle collapsed\"
        data-toggle=\"collapse\"
        data-target=\"#bs-example-navbar-collapse-1\"
        aria-expanded=\"false\"
      >
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\">Cátalogo Online</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\">
          <a href=\"/productos\">Todos los productos<span class=\"sr-only\">(current)</span></a>
        </li>
        <li><a href=\"#\"></a></li>
        <li class=\"dropdown\">
          <a
            href=\"#\"
            class=\"dropdown-toggle\"
            data-toggle=\"dropdown\"
            role=\"button\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            >Categorías <span class=\"caret\"></span
          ></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Camas</a></li>
            <li><a href=\"#\">Muebles de dormitorio</a></li>
            <li><a href=\"#\">Decoración de paredes</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Cocina</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Baño</a></li>
          </ul>
        </li>
      </ul>
      <form class=\"navbar-form navbar-left\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\" />
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Link</a></li>
        <li class=\"dropdown\">
          <a
            href=\"#\"
            class=\"dropdown-toggle\"
            data-toggle=\"dropdown\"
            role=\"button\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            >Dropdown <span class=\"caret\"></span
          ></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
{% endblock %}
", "@AppBundle/Resources/Views/Index.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\src\\AppBundle/Resources/Views/Index.html.twig");
    }
}
