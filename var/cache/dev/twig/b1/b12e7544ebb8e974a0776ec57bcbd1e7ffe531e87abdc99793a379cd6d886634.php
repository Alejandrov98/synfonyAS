<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_73242406a9976ade4f546e67658f377ac955c824c0c97f0a29349f314a735d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4f7e3a6ed5566918751bc177806e86115d7b985fe366ca29550884883726011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f7e3a6ed5566918751bc177806e86115d7b985fe366ca29550884883726011->enter($__internal_c4f7e3a6ed5566918751bc177806e86115d7b985fe366ca29550884883726011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $__internal_3224289752be6bec7e9ed29ab3bbdc021ff3f4fe280a0e0f69da7f779f51a72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3224289752be6bec7e9ed29ab3bbdc021ff3f4fe280a0e0f69da7f779f51a72e->enter($__internal_3224289752be6bec7e9ed29ab3bbdc021ff3f4fe280a0e0f69da7f779f51a72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Page id: ";
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "</h1>
";
        
        $__internal_c4f7e3a6ed5566918751bc177806e86115d7b985fe366ca29550884883726011->leave($__internal_c4f7e3a6ed5566918751bc177806e86115d7b985fe366ca29550884883726011_prof);

        
        $__internal_3224289752be6bec7e9ed29ab3bbdc021ff3f4fe280a0e0f69da7f779f51a72e->leave($__internal_3224289752be6bec7e9ed29ab3bbdc021ff3f4fe280a0e0f69da7f779f51a72e_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Page id: {{ page }}</h1>
", "BlogBundle:Default:index.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\src\\BlogBundle/Resources/views/Default/index.html.twig");
    }
}
