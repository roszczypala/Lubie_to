<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e54dff86cdca5c97fa6d3aa3e249eda7316bc6f7597bdb5bc44dc118291e8353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3e6e5d04d36baa95f388ee4f820ed90b6c6fea0e7cd058d8b30e527bf5ff60f = $this->env->getExtension("native_profiler");
        $__internal_c3e6e5d04d36baa95f388ee4f820ed90b6c6fea0e7cd058d8b30e527bf5ff60f->enter($__internal_c3e6e5d04d36baa95f388ee4f820ed90b6c6fea0e7cd058d8b30e527bf5ff60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c3e6e5d04d36baa95f388ee4f820ed90b6c6fea0e7cd058d8b30e527bf5ff60f->leave($__internal_c3e6e5d04d36baa95f388ee4f820ed90b6c6fea0e7cd058d8b30e527bf5ff60f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5e65ffaddc7038fcb4fd52e229513914557e01fb3b859cab2716bb21aa3a413 = $this->env->getExtension("native_profiler");
        $__internal_b5e65ffaddc7038fcb4fd52e229513914557e01fb3b859cab2716bb21aa3a413->enter($__internal_b5e65ffaddc7038fcb4fd52e229513914557e01fb3b859cab2716bb21aa3a413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b5e65ffaddc7038fcb4fd52e229513914557e01fb3b859cab2716bb21aa3a413->leave($__internal_b5e65ffaddc7038fcb4fd52e229513914557e01fb3b859cab2716bb21aa3a413_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
