<?php

/* AppBundle:Photo:new.html.twig */
class __TwigTemplate_7ca793529e851744761478be219542293bdbc88a2c55a33a1ec5be02c6e7cae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Photo:new.html.twig", 1);
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
        $__internal_a57065563967692419e895578c6fff4d4d464464a0004bf2aecd6cff217498b8 = $this->env->getExtension("native_profiler");
        $__internal_a57065563967692419e895578c6fff4d4d464464a0004bf2aecd6cff217498b8->enter($__internal_a57065563967692419e895578c6fff4d4d464464a0004bf2aecd6cff217498b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Photo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57065563967692419e895578c6fff4d4d464464a0004bf2aecd6cff217498b8->leave($__internal_a57065563967692419e895578c6fff4d4d464464a0004bf2aecd6cff217498b8_prof);

    }

    // line 3
    public function block_top($context, array $blocks = array())
    {
        $__internal_d638c053f5a83bbfca4a00dda190af129330303c9d8f5a6bb015adf01d704189 = $this->env->getExtension("native_profiler");
        $__internal_d638c053f5a83bbfca4a00dda190af129330303c9d8f5a6bb015adf01d704189->enter($__internal_d638c053f5a83bbfca4a00dda190af129330303c9d8f5a6bb015adf01d704189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 4
        echo "    <h1 class=\"text-center\">Add photo</h1>
";
        
        $__internal_d638c053f5a83bbfca4a00dda190af129330303c9d8f5a6bb015adf01d704189->leave($__internal_d638c053f5a83bbfca4a00dda190af129330303c9d8f5a6bb015adf01d704189_prof);

    }

    // line 7
    public function block_middle($context, array $blocks = array())
    {
        $__internal_c31fdc29f8128b0039142c5fee8710febfbebb5f857902aaf4472d37f05fa1d8 = $this->env->getExtension("native_profiler");
        $__internal_c31fdc29f8128b0039142c5fee8710febfbebb5f857902aaf4472d37f05fa1d8->enter($__internal_c31fdc29f8128b0039142c5fee8710febfbebb5f857902aaf4472d37f05fa1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 8
        echo "<div class=\"col-md-2\"></div>
        <div class=\"col-md-8\">
            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
            <div class=\"form-group\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            <input class=\"btn btn-custom\" type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "\" />
    
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "   
    </div>
    <div class=\"col-md-2\"></div>
    
";
        
        $__internal_c31fdc29f8128b0039142c5fee8710febfbebb5f857902aaf4472d37f05fa1d8->leave($__internal_c31fdc29f8128b0039142c5fee8710febfbebb5f857902aaf4472d37f05fa1d8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Photo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  67 => 12,  63 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block top %}*/
/*     <h1 class="text-center">Add photo</h1>*/
/* {% endblock %}  */
/* */
/* {% block middle -%}*/
/*     <div class="col-md-2"></div>*/
/*         <div class="col-md-8">*/
/*             {{ form_start(form, {'attr':{'role':'form'}}) }}*/
/*             <div class="form-group">{{ form_widget(form.path, {'attr':{'class':'form-control'}}) }}</div>*/
/*             <input class="btn btn-custom" type="submit" value="{{ 'Add'|trans }}" />*/
/*     */
/* {{ form_end(form) }}   */
/*     </div>*/
/*     <div class="col-md-2"></div>*/
/*     */
/* {% endblock %}*/
/* */
