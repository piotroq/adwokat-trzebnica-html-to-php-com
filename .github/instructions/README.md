# Custom Instructions

This folder contains example custom instructions for GitHub Copilot. For more information on how to use these, see the [GitHub Copilot custom instructions](https://code.visualstudio.com/docs/copilot/copilot-customization#_custom-instructions).

## Available Instruction Files

| File | Pattern | Description |
|------|---------|-------------|
| [ai-prompt-engineering-safety-best-practices.instructions.md](ai-prompt-engineering-safety-best-practices.instructions.md) | `['*']` | Comprehensive best practices for AI prompt engineering, safety frameworks, bias mitigation, and responsible AI usage for Copilot and LLMs. |
| [angular.instructions.md](angular.instructions.md) | `**/*.ts, **/*.html, **/*.scss, **/*.css` | Angular-specific coding standards and best practices |
| [aspnet-rest-apis.instructions.md](aspnet-rest-apis.instructions.md) | `**/*.cs, **/*.json` | Guidelines for building REST APIs with ASP.NET |
| [azure-developer-solution-accelerator.md](azure-developer-solution-accelerator.md) | `**` | Apply Azure Developer CLI best practices and guidelines for creating Azure solution accelerators. |
| [azure-functions-typescript.instructions.md](azure-functions-typescript.instructions.md) | `**/*.ts, **/*.js, **/*.json` | TypeScript patterns for Azure Functions |
| [bicep-code-best-practices.instructions.md](bicep-code-best-practices.instructions.md) | `**/*.bicep` | Infrastructure as Code with Bicep |
| [blazor.instructions.md](blazor.instructions.md) | `**/*.razor, **/*.razor.cs, **/*.razor.css` | Blazor component and application patterns |
| [cmake-vcpkg.instructions.md](cmake-vcpkg.instructions.md) | `**/*.cmake, **/CMakeLists.txt, **/*.cpp, **/*.h, **/*.hpp` | C++ project configuration and package management |
| [containerization-docker-best-practices.instructions.md](containerization-docker-best-practices.instructions.md) | `*` | Comprehensive best practices for creating optimized, secure, and efficient Docker images and managing containers. Covers multi-stage builds, image layer optimization, security scanning, and runtime best practices. |
| [copilot-thought-logging.instructions.md](copilot-thought-logging.instructions.md) | `**` | See process Copilot is following where you can edit this to reshape the interaction or save when follow up may be needed |
| [csharp-14-best-practices.instructions.md](csharp-14-best-practices.instructions.md) | `**/*.cs` | C# 14 best practices and formatting guidelines for AI code generation. |
| [csharp-best-practices.instructions.md](csharp-best-practices.instructions.md) | `**/*.cs` | C# best practices and formatting guidelines for AI code generation (all versions). |
| [csharp.instructions.md](csharp.instructions.md) | `**/*.cs` | Guidelines for building C# applications |
| [devops-core-principles.instructions.md](devops-core-principles.instructions.md) | `*` | Foundational instructions covering core DevOps principles, culture (CALMS), and key metrics (DORA) to guide GitHub Copilot in understanding and promoting effective software delivery. |
| [dotnet-architecture-good-practices.instructions.md](dotnet-architecture-good-practices.instructions.md) | `**/*.cs,**/*.csproj,**/Program.cs,**/*.razor` | DDD and .NET architecture guidelines |
| [dotnet-maui.instructions.md](dotnet-maui.instructions.md) | `**/*.xaml, **/*.cs` | .NET MAUI component and application patterns |
| [genaiscript.instructions.md](genaiscript.instructions.md) | `**/*.genai.*` | AI-powered script generation guidelines |
| [generate-modern-terraform-code-for-azure.instructions.md](generate-modern-terraform-code-for-azure.instructions.md) | `**/*.tf` | Guidelines for generating modern Terraform code for Azure |
| [gilfoyle-code-review.instructions.md](gilfoyle-code-review.instructions.md) | `**` | Gilfoyle-style code review instructions that channel the sardonic technical supremacy of Silicon Valley''s most arrogant systems architect. |
| [github-actions-ci-cd-best-practices.instructions.md](github-actions-ci-cd-best-practices.instructions.md) | `.github/workflows/*.yml` | Comprehensive guide for building robust, secure, and efficient CI/CD pipelines using GitHub Actions. Covers workflow structure, jobs, steps, environment variables, secret management, caching, matrix strategies, testing, and deployment strategies. |
| [go.instructions.md](go.instructions.md) | `**/*.go,**/go.mod,**/go.sum` | Instructions for writing Go code following idiomatic Go practices and community standards |
| [java.instructions.md](java.instructions.md) | `**/*.java` | Guidelines for building Java base applications |
| [joyride-user-project.instructions.md](joyride-user-project.instructions.md) | `scripts/**/*.cljs,src/**/*.cljs,deps.edn,.joyride/**/*.cljs` | Expert assistance for Joyride User Script projects - REPL-driven ClojureScript and user space automation of VS Code |
| [joyride-workspace-automation.instructions.md](joyride-workspace-automation.instructions.md) | `.joyride/**/*.*` | Expert assistance for Joyride Workspace automation - REPL-driven and user space ClojureScript automation within specific VS Code workspaces |
| [kubernetes-deployment-best-practices.instructions.md](kubernetes-deployment-best-practices.instructions.md) | `*` | Comprehensive best practices for deploying and managing applications on Kubernetes. Covers Pods, Deployments, Services, Ingress, ConfigMaps, Secrets, health checks, resource limits, scaling, and security contexts. |
| [localization.instructions.md](localization.instructions.md) | `**/*.md` | Guidelines for localizing markdown documents |
| [markdown.instructions.md](markdown.instructions.md) | `**/*.md` | Documentation and content creation standards |
| [memory-bank.instructions.md](memory-bank.instructions.md) | `**` |  |
| [ms-sql-dba.instructions.md](ms-sql-dba.instructions.md) | `**` | Instructions for customizing GitHub Copilot behavior for MS-SQL DBA chat mode. |
| [nextjs-tailwind.instructions.md](nextjs-tailwind.instructions.md) | `**/*.tsx, **/*.ts, **/*.jsx, **/*.js, **/*.css` | Next.js + Tailwind development standards and instructions |
| [nodejs-javascript-vitest.instructions.md](nodejs-javascript-vitest.instructions.md) | `**/*.js, **/*.mjs, **/*.cjs` | Guidelines for writing Node.js and JavaScript code with Vitest testing |
| [performance-optimization.instructions.md](performance-optimization.instructions.md) | `*` | The most comprehensive, practical, and engineer-authored performance optimization instructions for all languages, frameworks, and stacks. Covers frontend, backend, and database best practices with actionable guidance, scenario-based checklists, troubleshooting, and pro tips. |
| [playwright-typescript.instructions.md](playwright-typescript.instructions.md) | `**` | Playwright test generation instructions |
| [power-platform-connector.instructions.md](power-platform-connector.instructions.md) | `**/*.{json,md}` | Comprehensive development guidelines for Power Platform Custom Connectors using JSON Schema definitions. Covers API definitions (Swagger 2.0), API properties, and settings configuration with Microsoft extensions. |
| [powershell.instructions.md](powershell.instructions.md) | `**/*.ps1,**/*.psm1` | PowerShell cmdlet and scripting best practices based on Microsoft guidelines |
| [python.instructions.md](python.instructions.md) | `**/*.py` | Python coding conventions and guidelines |
| [quarkus-mcp-server-sse.instructions.md](quarkus-mcp-server-sse.instructions.md) | `*` | Quarkus and MCP Server with HTTP SSE transport development standards and instructions |
| [quarkus.instructions.md](quarkus.instructions.md) | `*` | Quarkus development standards and instructions |
| [reactjs.instructions.md](reactjs.instructions.md) | `**/*.jsx, **/*.tsx, **/*.js, **/*.ts, **/*.css, **/*.scss` | ReactJS development standards and best practices |
| [ruby-on-rails.instructions.md](ruby-on-rails.instructions.md) | `**/*.rb` | Ruby on Rails coding conventions and guidelines |
| [security-and-owasp.instructions.md](security-and-owasp.instructions.md) | `*` | Comprehensive secure coding instructions for all languages and frameworks, based on OWASP Top 10 and industry best practices. |
| [self-explanatory-code-commenting.instructions.md](self-explanatory-code-commenting.instructions.md) | `**` | Guidelines for GitHub Copilot to write comments to achieve self-explanatory code with less comments. Examples are in JavaScript but it should work on any language that has comments. |
| [spec-driven-workflow-v1.instructions.md](spec-driven-workflow-v1.instructions.md) | `**` | Specification-Driven Workflow v1 provides a structured approach to software development, ensuring that requirements are clearly defined, designs are meticulously planned, and implementations are thoroughly documented and validated. |
| [springboot.instructions.md](springboot.instructions.md) | `**/*.java, **/*.kt` | Guidelines for building Spring Boot base applications |
| [sql-sp-generation.instructions.md](sql-sp-generation.instructions.md) | `**/*.sql` | Guidelines for generating SQL statements and stored procedures |
| [taming-copilot.instructions.md](taming-copilot.instructions.md) | `**` | Prevent Copilot from wreaking havoc across your codebase, keeping it under control. |
| [tanstack-start-shadcn-tailwind.instructions.md](tanstack-start-shadcn-tailwind.instructions.md) | `**/*.ts, **/*.tsx, **/*.js, **/*.jsx, **/*.css, **/*.scss, **/*.json` | Guidelines for building TanStack Start applications |
| [vuejs3.instructions.md](vuejs3.instructions.md) | `**/*.vue, **/*.ts, **/*.js, **/*.scss` | VueJS 3 development standards and best practices with Composition API and TypeScript |


## Usage

To use these instructions:

1. Copy the desired `.instructions.md` file to your VS Code user settings folder or workspace `.github/instructions` folder
1. Select the new instruction set through the chat interface in VS Code
