<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_0a0c836d0da410231ac918825512b665 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        // line 1
        yield "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 5)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 5), "html", null, true)) : ("(none)"));
        yield "</span>
        <span class=\"label\">Matched route</span>
    </div>
</div>

";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    <h3>Route Parameters</h3>

    ";
            // line 13
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "routeParams", [], "any", false, false, false, 13))) {
                // line 14
                yield "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 18
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "routeParams", [], "any", false, false, false, 18), "labels" => ["Name", "Value"]], false);
                yield "
    ";
            }
        }
        // line 21
        yield "
";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["router"] ?? null), "redirect", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["router"] ?? null), "targetUrl", [], "any", false, false, false, 27), "html", null, true);
            yield "
        ";
            // line 28
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["router"] ?? null), "targetRoute", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"text-muted\">(route: \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["router"] ?? null), "targetRoute", [], "any", false, false, false, 28), "html", null, true);
                yield "\")</span>";
            }
            // line 29
            yield "    </div>
";
        }
        // line 31
        yield "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "pathinfo", [], "any", false, false, false, 35), "html", null, true);
        yield "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["traces"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 49
            yield "        <tr class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 49) == 1)) ? ("status-warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 49) == 2)) ? ("status-success") : (""))));
            yield "\">
            <td class=\"font-normal text-muted nowrap\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td class=\"break-long-words\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "name", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
            <td class=\"break-long-words\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "path", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
            <td class=\"break-long-words font-normal\">
                ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 54) == 1)) {
                // line 55
                yield "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 56), "html", null, true);
                yield "</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 57
$context["trace"], "level", [], "any", false, false, false, 57) == 2)) {
                // line 58
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 58), "html", null, true);
                yield "
                ";
            } else {
                // line 60
                yield "                    Path does not match
                ";
            }
            // line 62
            yield "            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Router/panel.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  199 => 65,  183 => 62,  179 => 60,  173 => 58,  171 => 57,  167 => 56,  164 => 55,  162 => 54,  157 => 52,  153 => 51,  149 => 50,  144 => 49,  127 => 48,  111 => 35,  105 => 31,  101 => 29,  95 => 28,  91 => 27,  85 => 23,  83 => 22,  80 => 21,  73 => 18,  67 => 14,  65 => 13,  61 => 11,  59 => 10,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Router/panel.html.twig", "/Users/samir/Desktop/Scalingo/sample/sample-php-symfony/vendor/symfony/web-profiler-bundle/Resources/views/Router/panel.html.twig");
    }
}
