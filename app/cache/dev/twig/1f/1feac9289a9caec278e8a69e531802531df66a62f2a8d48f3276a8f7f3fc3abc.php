<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_464bf39625d57cfa5d3cebeafbea67aa5ea4539fb3e89692324fc000edcfe74a extends Twig_Template
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
        $__internal_e499e7710eec25721a7702de0394c550185883f4f26410e42a29ac679ff8f99d = $this->env->getExtension("native_profiler");
        $__internal_e499e7710eec25721a7702de0394c550185883f4f26410e42a29ac679ff8f99d->enter($__internal_e499e7710eec25721a7702de0394c550185883f4f26410e42a29ac679ff8f99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e499e7710eec25721a7702de0394c550185883f4f26410e42a29ac679ff8f99d->leave($__internal_e499e7710eec25721a7702de0394c550185883f4f26410e42a29ac679ff8f99d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
