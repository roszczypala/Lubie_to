<?php

/* AppBundle:Photo:edit.html.twig */
class __TwigTemplate_3cee6d92373cfa2a498e51949457acb94ba26ae24c3f4b29faf040489b10f687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Photo:edit.html.twig", 1);
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
        $__internal_c0b335eb2a7a036b981ef7ff29ab4775a89ff8d7acae57825aabd09249b74db1 = $this->env->getExtension("native_profiler");
        $__internal_c0b335eb2a7a036b981ef7ff29ab4775a89ff8d7acae57825aabd09249b74db1->enter($__internal_c0b335eb2a7a036b981ef7ff29ab4775a89ff8d7acae57825aabd09249b74db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Photo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0b335eb2a7a036b981ef7ff29ab4775a89ff8d7acae57825aabd09249b74db1->leave($__internal_c0b335eb2a7a036b981ef7ff29ab4775a89ff8d7acae57825aabd09249b74db1_prof);

    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        $__internal_f61989c4a6530ba579d18b7d5f74e155aa43137b09bca3a9e95da186c5993b94 = $this->env->getExtension("native_profiler");
        $__internal_f61989c4a6530ba579d18b7d5f74e155aa43137b09bca3a9e95da186c5993b94->enter($__internal_f61989c4a6530ba579d18b7d5f74e155aa43137b09bca3a9e95da186c5993b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 4
        echo "<h1>Edit photo</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

";
        
        $__internal_f61989c4a6530ba579d18b7d5f74e155aa43137b09bca3a9e95da186c5993b94->leave($__internal_f61989c4a6530ba579d18b7d5f74e155aa43137b09bca3a9e95da186c5993b94_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Photo:edit.html.twig";
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
/*     <h1>Edit photo</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/* {% endblock %}*/
/* */
