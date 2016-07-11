<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3bb190cc279cad315b62bd6f36d73ceeb2695149ef64ed6da1f40e6f5c24213b extends Twig_Template
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
        $__internal_591777d30d06754d0063efa2797baba5cec0727d2b288ec1a3eee5e286040c86 = $this->env->getExtension("native_profiler");
        $__internal_591777d30d06754d0063efa2797baba5cec0727d2b288ec1a3eee5e286040c86->enter($__internal_591777d30d06754d0063efa2797baba5cec0727d2b288ec1a3eee5e286040c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_591777d30d06754d0063efa2797baba5cec0727d2b288ec1a3eee5e286040c86->leave($__internal_591777d30d06754d0063efa2797baba5cec0727d2b288ec1a3eee5e286040c86_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
