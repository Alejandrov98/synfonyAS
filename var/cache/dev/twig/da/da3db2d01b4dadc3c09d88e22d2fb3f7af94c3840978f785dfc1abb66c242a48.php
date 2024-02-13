<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44b814acee18a20fa813f5b47a7edc272c237f0d3094c8f2c37c3ba7b1319eb3 extends Twig_Template
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
        $__internal_a60143428da040241f5c6588e4d5b3e213b6deb271631c5251ec81b75daf30bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60143428da040241f5c6588e4d5b3e213b6deb271631c5251ec81b75daf30bf->enter($__internal_a60143428da040241f5c6588e4d5b3e213b6deb271631c5251ec81b75daf30bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4812304bb1f6f36a89c57f19daa61bcd7e0caad76e20b3ab34ac3b9d498cc97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4812304bb1f6f36a89c57f19daa61bcd7e0caad76e20b3ab34ac3b9d498cc97e->enter($__internal_4812304bb1f6f36a89c57f19daa61bcd7e0caad76e20b3ab34ac3b9d498cc97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a60143428da040241f5c6588e4d5b3e213b6deb271631c5251ec81b75daf30bf->leave($__internal_a60143428da040241f5c6588e4d5b3e213b6deb271631c5251ec81b75daf30bf_prof);

        
        $__internal_4812304bb1f6f36a89c57f19daa61bcd7e0caad76e20b3ab34ac3b9d498cc97e->leave($__internal_4812304bb1f6f36a89c57f19daa61bcd7e0caad76e20b3ab34ac3b9d498cc97e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebcb377e7ee91085c3beb1eebf0d98085c59ca352ba19a3100f5c7dd5bd27a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcb377e7ee91085c3beb1eebf0d98085c59ca352ba19a3100f5c7dd5bd27a9e->enter($__internal_ebcb377e7ee91085c3beb1eebf0d98085c59ca352ba19a3100f5c7dd5bd27a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81173ae5521cf7d0674dbe1eb7655a616fc80d0d77f4de3c35008a5857b3f077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81173ae5521cf7d0674dbe1eb7655a616fc80d0d77f4de3c35008a5857b3f077->enter($__internal_81173ae5521cf7d0674dbe1eb7655a616fc80d0d77f4de3c35008a5857b3f077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_81173ae5521cf7d0674dbe1eb7655a616fc80d0d77f4de3c35008a5857b3f077->leave($__internal_81173ae5521cf7d0674dbe1eb7655a616fc80d0d77f4de3c35008a5857b3f077_prof);

        
        $__internal_ebcb377e7ee91085c3beb1eebf0d98085c59ca352ba19a3100f5c7dd5bd27a9e->leave($__internal_ebcb377e7ee91085c3beb1eebf0d98085c59ca352ba19a3100f5c7dd5bd27a9e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b2f7d58f337674f6dcb9276e43c36bd6121306d25182c918cbb537f3b543526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2f7d58f337674f6dcb9276e43c36bd6121306d25182c918cbb537f3b543526->enter($__internal_5b2f7d58f337674f6dcb9276e43c36bd6121306d25182c918cbb537f3b543526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_008e1e935d93edc5f92dd4ab0cead3b4a22bf728aff351730745c6bef0d27f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008e1e935d93edc5f92dd4ab0cead3b4a22bf728aff351730745c6bef0d27f58->enter($__internal_008e1e935d93edc5f92dd4ab0cead3b4a22bf728aff351730745c6bef0d27f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_008e1e935d93edc5f92dd4ab0cead3b4a22bf728aff351730745c6bef0d27f58->leave($__internal_008e1e935d93edc5f92dd4ab0cead3b4a22bf728aff351730745c6bef0d27f58_prof);

        
        $__internal_5b2f7d58f337674f6dcb9276e43c36bd6121306d25182c918cbb537f3b543526->leave($__internal_5b2f7d58f337674f6dcb9276e43c36bd6121306d25182c918cbb537f3b543526_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_28adf0564822949b15a4dd2b511b35146638c0b9f0f2ec3b03a358c77b0f135c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28adf0564822949b15a4dd2b511b35146638c0b9f0f2ec3b03a358c77b0f135c->enter($__internal_28adf0564822949b15a4dd2b511b35146638c0b9f0f2ec3b03a358c77b0f135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a952dec516fc6c7798121ac547025ce21e0d3e3d2f93a1ff93db0370c0c7d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a952dec516fc6c7798121ac547025ce21e0d3e3d2f93a1ff93db0370c0c7d4b->enter($__internal_5a952dec516fc6c7798121ac547025ce21e0d3e3d2f93a1ff93db0370c0c7d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5a952dec516fc6c7798121ac547025ce21e0d3e3d2f93a1ff93db0370c0c7d4b->leave($__internal_5a952dec516fc6c7798121ac547025ce21e0d3e3d2f93a1ff93db0370c0c7d4b_prof);

        
        $__internal_28adf0564822949b15a4dd2b511b35146638c0b9f0f2ec3b03a358c77b0f135c->leave($__internal_28adf0564822949b15a4dd2b511b35146638c0b9f0f2ec3b03a358c77b0f135c_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
