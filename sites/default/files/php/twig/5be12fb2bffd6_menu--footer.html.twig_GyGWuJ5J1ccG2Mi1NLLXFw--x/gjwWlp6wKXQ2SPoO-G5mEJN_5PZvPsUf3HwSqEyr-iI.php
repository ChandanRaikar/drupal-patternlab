<?php

/* themes/climboot/templates/navigation/menu--footer.html.twig */
class __TwigTemplate_7e7f98cd6bb12633b8eb06ec6f49c4d8e8badeeb2c9db1c1e6b066bc304a5ad4 extends Twig_Template
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
        $tags = array("import" => 1, "macro" => 4, "if" => 6, "spaceless" => 7, "for" => 13, "set" => 15);
        $filters = array();
        $functions = array("link" => 35);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'spaceless', 'for', 'set'),
                array(),
                array('link')
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

        // line 1
        $context["menus"] = $this;
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null))));
        echo "

";
    }

    // line 4
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "  ";
            $context["menus"] = $this;
            // line 6
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 7
                echo "    ";
                ob_start();
                // line 8
                echo "      ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 9
                    echo "        <ul class=\"nav flex-column\">
      ";
                } else {
                    // line 11
                    echo "        <ul class=\"nav dropdown\">
      ";
                }
                // line 13
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "        ";
                    // line 15
                    $context["item_classes"] = array(0 => "nav-item", 1 => (($this->getAttribute(                    // line 17
$context["item"], "below", array())) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 18
$context["item"], "in_active_trail", array())) ? ("is-active-trail") : ("")), 3 => (($this->getAttribute(                    // line 19
$context["item"], "is_collapsed", array())) ? ("is-collapsed") : ("")), 4 => (($this->getAttribute(                    // line 20
$context["item"], "is_expanded", array())) ? ("is-expanded") : ("")));
                    // line 23
                    echo "        ";
                    // line 24
                    $context["link_attributes"] = array("class" => array(0 => "nav-link", 1 => (($this->getAttribute(                    // line 27
$context["item"], "below", array())) ? ("dropdown-toggle") : ("")), 2 => (($this->getAttribute(                    // line 28
$context["item"], "in_active_trail", array())) ? ("is-active-trail") : ("")), 3 => (($this->getAttribute(                    // line 29
$context["item"], "is_collapsed", array())) ? ("is-collapsed") : ("")), 4 => (($this->getAttribute(                    // line 30
$context["item"], "is_expanded", array())) ? ("is-expanded") : (""))));
                    // line 34
                    echo "        <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                    echo ">
          ";
                    // line 35
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), ($context["link_attributes"] ?? null)), "html", null, true));
                    echo "
          ";
                    // line 36
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 37
                        echo "            ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                        echo "
          ";
                    }
                    // line 39
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "      </ul>
    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 43
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/climboot/templates/navigation/menu--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  132 => 41,  125 => 39,  119 => 37,  117 => 36,  113 => 35,  108 => 34,  106 => 30,  105 => 29,  104 => 28,  103 => 27,  102 => 24,  100 => 23,  98 => 20,  97 => 19,  96 => 18,  95 => 17,  94 => 15,  92 => 14,  87 => 13,  83 => 11,  79 => 9,  76 => 8,  73 => 7,  70 => 6,  67 => 5,  52 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/climboot/templates/navigation/menu--footer.html.twig", "C:\\xampp\\htdocs\\drupal-fresh\\themes\\climboot\\templates\\navigation\\menu--footer.html.twig");
    }
}
