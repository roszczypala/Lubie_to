<?php

/* AppBundle:Photo:show.html.twig */
class __TwigTemplate_e5768ebba730347d1f50ac81d66d79ac7473120d27b44fcafbc4a122ba15150f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Photo:show.html.twig", 1);
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
        $__internal_49cad8797102f0914c8a7d0d74dcf2b132360690e343629d709ed770d573820d = $this->env->getExtension("native_profiler");
        $__internal_49cad8797102f0914c8a7d0d74dcf2b132360690e343629d709ed770d573820d->enter($__internal_49cad8797102f0914c8a7d0d74dcf2b132360690e343629d709ed770d573820d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Photo:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49cad8797102f0914c8a7d0d74dcf2b132360690e343629d709ed770d573820d->leave($__internal_49cad8797102f0914c8a7d0d74dcf2b132360690e343629d709ed770d573820d_prof);

    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        $__internal_4c11bc24888a42345f750cf0a2efa4d26702ac66c08d0fa2343fb216879dcfbe = $this->env->getExtension("native_profiler");
        $__internal_4c11bc24888a42345f750cf0a2efa4d26702ac66c08d0fa2343fb216879dcfbe->enter($__internal_4c11bc24888a42345f750cf0a2efa4d26702ac66c08d0fa2343fb216879dcfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 4
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()), "html", null, true);
        echo "\"/>

    <a class=\"btn btn-success btn-block\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("photo");
        echo "\">
        Back to the list
    </a>
";
        
        $__internal_4c11bc24888a42345f750cf0a2efa4d26702ac66c08d0fa2343fb216879dcfbe->leave($__internal_4c11bc24888a42345f750cf0a2efa4d26702ac66c08d0fa2343fb216879dcfbe_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Photo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block middle -%}*/
/*     <img src="{{ entity.path }}"/>*/
/* */
/*     <a class="btn btn-success btn-block" href="{{ path('photo') }}">*/
/*         Back to the list*/
/*     </a>*/
/* {% endblock %}*/
/* */
