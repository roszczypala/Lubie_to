<?php

/* AppBundle:Event:newComment.html.twig */
class __TwigTemplate_f2c6ec3aa948ed83f647c2dc57fdf049f6fce083d8db77dbe029e845678245d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2397c31cead32132e3e6b4b7bcde9f07302711512efb4f95e44eb7df777dfd02 = $this->env->getExtension("native_profiler");
        $__internal_2397c31cead32132e3e6b4b7bcde9f07302711512efb4f95e44eb7df777dfd02->enter($__internal_2397c31cead32132e3e6b4b7bcde9f07302711512efb4f95e44eb7df777dfd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Event:newComment.html.twig"));

        // line 1
        $this->displayBlock('middle', $context, $blocks);
        
        $__internal_2397c31cead32132e3e6b4b7bcde9f07302711512efb4f95e44eb7df777dfd02->leave($__internal_2397c31cead32132e3e6b4b7bcde9f07302711512efb4f95e44eb7df777dfd02_prof);

    }

    public function block_middle($context, array $blocks = array())
    {
        $__internal_25f5ab1c25d38070c4d0a006303479d65285f7ee101280a789c7e58471630183 = $this->env->getExtension("native_profiler");
        $__internal_25f5ab1c25d38070c4d0a006303479d65285f7ee101280a789c7e58471630183->enter($__internal_25f5ab1c25d38070c4d0a006303479d65285f7ee101280a789c7e58471630183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 2
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form');
        echo "
";
        
        $__internal_25f5ab1c25d38070c4d0a006303479d65285f7ee101280a789c7e58471630183->leave($__internal_25f5ab1c25d38070c4d0a006303479d65285f7ee101280a789c7e58471630183_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Event:newComment.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block middle %}*/
/*     {{ form(comment_form) }}*/
/* {% endblock %}*/
/* */
