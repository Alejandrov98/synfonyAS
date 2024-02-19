<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_01b8cb5f2ce56d61e28e7f17278217238299400374531da9b0e60203a67c011c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Home:index.html.twig", 1);
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
        $__internal_54960a42640ff1b700814e4cabe3f417f5ff068d2ea44cabe42f5092300ef51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54960a42640ff1b700814e4cabe3f417f5ff068d2ea44cabe42f5092300ef51b->enter($__internal_54960a42640ff1b700814e4cabe3f417f5ff068d2ea44cabe42f5092300ef51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_4861e9a7db489b43daa6585fc9c7b1a042ebd01ea39ec2d078623118e892f360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4861e9a7db489b43daa6585fc9c7b1a042ebd01ea39ec2d078623118e892f360->enter($__internal_4861e9a7db489b43daa6585fc9c7b1a042ebd01ea39ec2d078623118e892f360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54960a42640ff1b700814e4cabe3f417f5ff068d2ea44cabe42f5092300ef51b->leave($__internal_54960a42640ff1b700814e4cabe3f417f5ff068d2ea44cabe42f5092300ef51b_prof);

        
        $__internal_4861e9a7db489b43daa6585fc9c7b1a042ebd01ea39ec2d078623118e892f360->leave($__internal_4861e9a7db489b43daa6585fc9c7b1a042ebd01ea39ec2d078623118e892f360_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a5fe8d1167789726d66a43eee9a51f0ff759c75e4ae15f4c916496e8c790bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5fe8d1167789726d66a43eee9a51f0ff759c75e4ae15f4c916496e8c790bcf->enter($__internal_7a5fe8d1167789726d66a43eee9a51f0ff759c75e4ae15f4c916496e8c790bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4539f634c38c8fc21bdcd314b27e5ac88165f3bdc65bae369af4ace79b085c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4539f634c38c8fc21bdcd314b27e5ac88165f3bdc65bae369af4ace79b085c6->enter($__internal_d4539f634c38c8fc21bdcd314b27e5ac88165f3bdc65bae369af4ace79b085c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1 style=\"text-align: center\">Todos los productos</h1>
    <div class=\"row\" style=\"padding: 20px;\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "            <div class=\"col-sm-6 col-md-4 product-card\" style=\"margin-bottom: 20px;\" data-category=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "category", array()), "getName", array(), "method"), "html", null, true);
            echo "\">
                <div class=\"thumbnail\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\">
                    <div class=\"caption\">
                        <h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</h3>
                        <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "category", array()), "getName", array(), "method"), "html", null, true);
            echo "</p>
                        ";
            // line 13
            echo "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
";
        
        $__internal_d4539f634c38c8fc21bdcd314b27e5ac88165f3bdc65bae369af4ace79b085c6->leave($__internal_d4539f634c38c8fc21bdcd314b27e5ac88165f3bdc65bae369af4ace79b085c6_prof);

        
        $__internal_7a5fe8d1167789726d66a43eee9a51f0ff759c75e4ae15f4c916496e8c790bcf->leave($__internal_7a5fe8d1167789726d66a43eee9a51f0ff759c75e4ae15f4c916496e8c790bcf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  78 => 13,  74 => 11,  70 => 10,  63 => 8,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1 style=\"text-align: center\">Todos los productos</h1>
    <div class=\"row\" style=\"padding: 20px;\">
        {% for product in products %}
            <div class=\"col-sm-6 col-md-4 product-card\" style=\"margin-bottom: 20px;\" data-category=\"{{ product.category.getName() }}\">
                <div class=\"thumbnail\">
                    <img src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
                    <div class=\"caption\">
                        <h3>{{ product.name }}</h3>
                        <p>{{ product.category.getName() }}</p>
                        {# Puedes mostrar más detalles del producto aquí si lo deseas #}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "AppBundle:Home:index.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\src\\AppBundle/Resources/views/Home/index.html.twig");
    }
}
