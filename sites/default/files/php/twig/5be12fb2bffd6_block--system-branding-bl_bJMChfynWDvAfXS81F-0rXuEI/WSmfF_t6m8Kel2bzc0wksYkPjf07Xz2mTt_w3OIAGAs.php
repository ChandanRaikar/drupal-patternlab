<?php

/* themes/patternlab/templates/block--system-branding-block.html.twig */
class __TwigTemplate_54692cef341bfd982bd424521d6b6470cc4ec6044fdc682e37f9eeb287eb0916 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/patternlab/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("include" => 18);
        $filters = array();
        $functions = array("path" => 20);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array(),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        $this->loadTemplate("@molecules/blocks/branding.twig", "themes/patternlab/templates/block--system-branding-block.html.twig", 18)->display(array_merge($context, array("url" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"), "site_title" =>         // line 21
($context["site_name"] ?? null), "site_logo" =>         // line 22
($context["site_logo"] ?? null), "site_slogan" =>         // line 23
($context["site_slogan"] ?? null))));
    }

    public function getTemplateName()
    {
        return "themes/patternlab/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  58 => 22,  57 => 21,  55 => 18,  52 => 17,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/patternlab/templates/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\drupal-fresh\\themes\\patternlab\\templates\\block--system-branding-block.html.twig");
    }
}
