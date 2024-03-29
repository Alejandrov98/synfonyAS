<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eb7bdbf1eee789fdf65300a23e06e5e6fdf3101e22609929a23d7d1b337c0665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1745b9e3286a8b7100787232eaf7c414c442f7aaa7bfee391a19221a88dba274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1745b9e3286a8b7100787232eaf7c414c442f7aaa7bfee391a19221a88dba274->enter($__internal_1745b9e3286a8b7100787232eaf7c414c442f7aaa7bfee391a19221a88dba274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3ea7827b5e89bbc671e4f62a17af3fcf27bec9fcbd36b41e7fa5c5a723acf0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea7827b5e89bbc671e4f62a17af3fcf27bec9fcbd36b41e7fa5c5a723acf0e1->enter($__internal_3ea7827b5e89bbc671e4f62a17af3fcf27bec9fcbd36b41e7fa5c5a723acf0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1745b9e3286a8b7100787232eaf7c414c442f7aaa7bfee391a19221a88dba274->leave($__internal_1745b9e3286a8b7100787232eaf7c414c442f7aaa7bfee391a19221a88dba274_prof);

        
        $__internal_3ea7827b5e89bbc671e4f62a17af3fcf27bec9fcbd36b41e7fa5c5a723acf0e1->leave($__internal_3ea7827b5e89bbc671e4f62a17af3fcf27bec9fcbd36b41e7fa5c5a723acf0e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ddf70410969585d80e2aea39befb5bcd51f3638dbbaae29efc8f513106dfddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ddf70410969585d80e2aea39befb5bcd51f3638dbbaae29efc8f513106dfddb->enter($__internal_1ddf70410969585d80e2aea39befb5bcd51f3638dbbaae29efc8f513106dfddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_94d9b9253c28ea23f0dce058f44a1c291aa5a4d35941aea1aea5e078903fbc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d9b9253c28ea23f0dce058f44a1c291aa5a4d35941aea1aea5e078903fbc02->enter($__internal_94d9b9253c28ea23f0dce058f44a1c291aa5a4d35941aea1aea5e078903fbc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_94d9b9253c28ea23f0dce058f44a1c291aa5a4d35941aea1aea5e078903fbc02->leave($__internal_94d9b9253c28ea23f0dce058f44a1c291aa5a4d35941aea1aea5e078903fbc02_prof);

        
        $__internal_1ddf70410969585d80e2aea39befb5bcd51f3638dbbaae29efc8f513106dfddb->leave($__internal_1ddf70410969585d80e2aea39befb5bcd51f3638dbbaae29efc8f513106dfddb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
