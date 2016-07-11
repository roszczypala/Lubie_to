<?php

/* AppBundle:Event:new.html.twig */
class __TwigTemplate_9236559621fb39349cb03d7113d1e9cf3d3b04f05925b254353df23f24ba5dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Event:new.html.twig", 1);
        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_749894641dfc09b2d9f43589075dd3d8887b6ca0910b8ee11fc49637395c0bd6 = $this->env->getExtension("native_profiler");
        $__internal_749894641dfc09b2d9f43589075dd3d8887b6ca0910b8ee11fc49637395c0bd6->enter($__internal_749894641dfc09b2d9f43589075dd3d8887b6ca0910b8ee11fc49637395c0bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_749894641dfc09b2d9f43589075dd3d8887b6ca0910b8ee11fc49637395c0bd6->leave($__internal_749894641dfc09b2d9f43589075dd3d8887b6ca0910b8ee11fc49637395c0bd6_prof);

    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        $__internal_f4b96122f0d3ecabadb1e9761650ddcb6a9a1d4d7bb10b406752dd05a95548fb = $this->env->getExtension("native_profiler");
        $__internal_f4b96122f0d3ecabadb1e9761650ddcb6a9a1d4d7bb10b406752dd05a95548fb->enter($__internal_f4b96122f0d3ecabadb1e9761650ddcb6a9a1d4d7bb10b406752dd05a95548fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 4
        echo "<h1>Event creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_f4b96122f0d3ecabadb1e9761650ddcb6a9a1d4d7bb10b406752dd05a95548fb->leave($__internal_f4b96122f0d3ecabadb1e9761650ddcb6a9a1d4d7bb10b406752dd05a95548fb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block middle -%}*/
/*     <h1>Event creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/* {% endblock %}*/
/* */
