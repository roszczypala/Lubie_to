<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_34bce67d80eac2cbd10679cf8c7d40f2876abf1510d6880dd88272c6443a315d extends Twig_Template
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
        $__internal_0fb29c7a57b703652335382ca99fd50fe5b42945de56250ea82a3ab815c615b3 = $this->env->getExtension("native_profiler");
        $__internal_0fb29c7a57b703652335382ca99fd50fe5b42945de56250ea82a3ab815c615b3->enter($__internal_0fb29c7a57b703652335382ca99fd50fe5b42945de56250ea82a3ab815c615b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0fb29c7a57b703652335382ca99fd50fe5b42945de56250ea82a3ab815c615b3->leave($__internal_0fb29c7a57b703652335382ca99fd50fe5b42945de56250ea82a3ab815c615b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
