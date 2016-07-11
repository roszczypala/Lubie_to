<?php

/* AppBundle:Crew:new.html.twig */
class __TwigTemplate_d5b6152aeb11de6377997b31c2aba401db3ce3e542bb26b249f3a01ffaa2fad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Crew:new.html.twig", 1);
        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec3f168e9d2240150093cc02c5a93e10ba65dd5f9e227960cbb483e10bcd72c5 = $this->env->getExtension("native_profiler");
        $__internal_ec3f168e9d2240150093cc02c5a93e10ba65dd5f9e227960cbb483e10bcd72c5->enter($__internal_ec3f168e9d2240150093cc02c5a93e10ba65dd5f9e227960cbb483e10bcd72c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Crew:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3f168e9d2240150093cc02c5a93e10ba65dd5f9e227960cbb483e10bcd72c5->leave($__internal_ec3f168e9d2240150093cc02c5a93e10ba65dd5f9e227960cbb483e10bcd72c5_prof);

    }

    // line 4
    public function block_top($context, array $blocks = array())
    {
        $__internal_a5ca182560cb025fec15a79681abfbf8a75a8e4071139ae68174d33b06161877 = $this->env->getExtension("native_profiler");
        $__internal_a5ca182560cb025fec15a79681abfbf8a75a8e4071139ae68174d33b06161877->enter($__internal_a5ca182560cb025fec15a79681abfbf8a75a8e4071139ae68174d33b06161877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 5
        echo "    <h1 class=\"text-center\">Add group</h1>
";
        
        $__internal_a5ca182560cb025fec15a79681abfbf8a75a8e4071139ae68174d33b06161877->leave($__internal_a5ca182560cb025fec15a79681abfbf8a75a8e4071139ae68174d33b06161877_prof);

    }

    // line 8
    public function block_middle($context, array $blocks = array())
    {
        $__internal_3211bc076180be628482857dd2a4c791ef490d7a36fe55bafb415c67b2855e72 = $this->env->getExtension("native_profiler");
        $__internal_3211bc076180be628482857dd2a4c791ef490d7a36fe55bafb415c67b2855e72->enter($__internal_3211bc076180be628482857dd2a4c791ef490d7a36fe55bafb415c67b2855e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 9
        echo "<div class=\"col-md-2\"></div>
    <div class=\"col-md-8\">
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
   
    <div class=\"form-group\">
        <label for=\"form_name\">Name: </label>

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"form_description\">Description: </label>

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <input class=\"btn btn-custom\" type=\"submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "\" />
    
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"col-md-2\"></div>
";
        
        $__internal_3211bc076180be628482857dd2a4c791ef490d7a36fe55bafb415c67b2855e72->leave($__internal_3211bc076180be628482857dd2a4c791ef490d7a36fe55bafb415c67b2855e72_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Crew:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  80 => 23,  75 => 21,  67 => 16,  59 => 11,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block top %}*/
/*     <h1 class="text-center">Add group</h1>*/
/* {% endblock %}  */
/* */
/* {% block middle -%}*/
/*     <div class="col-md-2"></div>*/
/*     <div class="col-md-8">*/
/*     {{ form_start(form, {'attr':{'role':'form'}}) }}*/
/*    */
/*     <div class="form-group">*/
/*         <label for="form_name">Name: </label>*/
/* */
/*         {{ form_widget(form.name, {'attr':{'class':'form-control'}})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="form_description">Description: </label>*/
/* */
/*         {{ form_widget(form.description, {'attr':{'class':'form-control'}})}}*/
/*     </div>*/
/*     <input class="btn btn-custom" type="submit" value="{{ 'Add'|trans }}" />*/
/*     */
/*     {{ form_end(form) }}*/
/*     </div>*/
/*     <div class="col-md-2"></div>*/
/* {% endblock %}*/
/* */
