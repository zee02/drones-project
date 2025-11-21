<?php

return [
    'banner' => [
        'drone_alt' => 'Drone em voo',
        'subtitle' => 'Filial Spider PT & África lusófona + Integrador DJI',
        'discover_button' => 'Ver Soluções por Setor',
    ],

    // CHAVE NOVA (Adicionada para o Título principal da página de Soluções)
    'hero' => [
        'solucoes_header' => 'Diversas soluções à sua medida',
    ],

    'products' => [
        'title' => 'Drones Profissionais',
        'subtitle' => 'Produtos em Destaque',
        'pro_title' => 'DJI Enterprise & Spider PT',
        'pro_tag' => 'Profissional',
        'consumer_title' => 'DJI Consumo / Comercial',
        'criadores_entusiastas' => 'Para Criadores e Entusiastas',
        'detalhes_btn' => 'Detalhes',
    ],

    'products2' => [
        'title' => 'Drones Comerciais',
    ],

    'popular' => [
        'listings' => 'listagens',
    ],

    'services' => [
        'title' => 'Escolhe o teu setor',
        'item1_title' => 'Agricultura & Floresta',
        'item2_title' => 'Energia & Utilities',
        'item3_title' => 'Construção & Infraestruturas',
        'item4_title' => 'Indústria & Facilities',
        'item5_title' => 'Governo & Proteção Civil',
        'item6_title' => 'Projetos à Medida', // Novo item 6
        'item1_desc' => 'Mapeamento de saúde vegetal e gestão de irrigação para otimização de colheitas.',
        'item2_desc' => 'Inspeção de infraestruturas críticas (eólicas, solares, linhas de transmissão) com termografia.',
        'item3_desc' => 'Levantamento topográfico, inspeção de pontes e monitorização de progresso de obras.',
        'item4_desc' => 'Controlo de inventário, inspeção de telhados industriais e monitorização de segurança.',
        'item5_desc' => 'Apoio a operações de busca e resgate, resposta a desastres e segurança pública.',
        'item6_desc' => 'Desenvolvimento de software e hardware de drone customizado para requisitos únicos.',
    ],

    // CHAVES RESTRUTURADAS
    'about_us' => [
        'how_we_work_title' => 'Como Trabalhamos',
        'step1' => 'Diagnóstico',
        'step2' => 'Prova de conceito',
        'step3' => 'Implementação',
        'step4' => 'Suporte',
    ],

    'community' => [
        'title' => 'Junte-se à Nossa Comunidade',
        'feature1_title' => 'Encontros Mensais de Voo',
        'feature1_text' => 'Partilhe experiências com outros pilotos e entusiastas de drones.',
        'feature2_title' => 'Apoio ao Curso de Piloto',
        'feature2_text' => 'Suporte completo para certificação e desenvolvimento de competências.',
        'cta_button' => 'Juntar-me à Comunidade',
    ],

    'contact' => [
        'title' => 'Contacte-nos',
        'subtitle_lorem' => 'Saber mais',
        'talk_button' => 'Fale connosco',
        'specialist_button' => 'Falar com um especialista',
    ],

    'nav' => [
        'menu' => 'Menu',
        'english' => 'Inglês (EN)',
        'portuguese' => 'Português (PT)',
        'solucoes' => 'Soluções',
        'produtos' => 'Produtos',
        'servicos' => 'Serviços',
        'comunidade' => 'Comunidade',
        'suporte' => 'Suporte',
        'ondecomprar' => 'Onde Comprar',
    ],

    'footer' => [
        'logo_alt' => 'Logo da Venue',
        'links_title' => 'Links Úteis',
        'links_faq' => 'Ajuda (FAQs)',
        'links_about' => 'Sobre a SKYDRI',
        'links_suporte' => 'Suporte Técnico',
        'links_partners' => 'Parcerias',
        'links_politicas' => 'Política de Privacidade',
        'links_contact' => 'Contacte-nos',
        'contact_title' => 'Informação de Contacto',
        'contact_phone' => 'Telefone:',
        'contact_email' => 'Email:',
        'copyright' => 'Copyright © :year :company.',
        'design_by' => 'Feito por: ',
    ],

    // ===================================================================================
    // NOVAS CHAVES PARA O CONTEXTO DINÂMICO/ESTÁTICO
    // ===================================================================================
    
    'servicos' => [
        'index' => [ // Chave para a página de índice /servicos
            'hero_title_p1' => 'Na SKYDRI, vendemos',
            'hero_title_p2' => 'soluções e serviços',
            'hero_title_p3' => ', não apenas equipamentos.',
            'hero_cta' => 'As Nossas Soluções',
            
            'pillars_title' => 'Os Nossos Pilares de Excelência',
            'pilar1_title' => 'Consultoria & Projeto',
            'pilar1_item1' => 'Desenho de Solução',
            'pilar1_item2' => 'Prova de Conceito',
            'pilar2_title' => 'Formação & Certificação',
            'pilar2_item1' => 'Curso Oficial de Piloto',
            'pilar2_item2' => 'Treino em Operação Segura',
            'pilar3_title' => 'Manutenção & Suporte',
            'pilar3_item1' => 'Contratos SLA',
            'pilar3_item2' => 'Integração de Sistemas',

            'cta_title' => 'Pronto para ir além do equipamento?',
            'cta_subtitle' => 'Fale com a nossa equipa de consultores e desenhe o seu próximo projeto.',
            'cta_button' => 'Falar com um Especialista',
        ],
    ],
    
    // CHAVES DE DETALHE DOS SETORES
    'setor' => [
        // ---------------------------------------------------------------------
        // 1. AGRICULTURA E FLORESTA (agricultura-floresta)
        // ---------------------------------------------------------------------
        'agricultura' => [ 
            'titulo_seccao' => 'Soluções de Precisão para Agricultura & Floresta 🌾',
            'tagline' => 'Maximize a sua produtividade, otimize o uso de água e detecte problemas de saúde vegetal com dados de drones de alta resolução.',
            
            'nav_problema' => 'Desafios Atuais',
            'nav_solucao' => 'Solução de Sensorização',
            'nav_casos' => 'Casos de Uso (NDVI/NDRE)',
            'nav_drones' => 'Drones & Sensores',
            'nav_beneficios' => 'Ganho de Eficiência',
            'nav_implementacao' => 'Processo de Adoção',
            'nav_faq' => 'Perguntas Comuns',

            'problema_titulo' => 'O Desafio da Inspeção Manual e Perdas na Colheita',
            'problema_contexto' => 'A monitorização tradicional de campos vastos é lenta, dispendiosa e ineficaz para identificar problemas localizados (doenças, stress hídrico) antes que afetem criticamente a colheita. Isto leva a um uso excessivo de recursos (água, pesticidas).',
            
            'solucao_titulo' => 'Solução SKYDRI: Diagnóstico Multiespectral',
            'solucao_hardware' => 'Drones robustos (M300/M350) e câmaras multiespectrais (MicaSense RedEdge) para medições **NDVI/NDRE**.',
            'solucao_software' => 'Plataformas de análise de imagem baseadas em IA (DroneDeploy, Pix4D) para mapeamento de saúde vegetal, contagem de plantas e análise de stress hídrico.',
            'solucao_servicos' => 'Consultoria de dados agronómicos, formação de pilotos em mapeamento de precisão e contratos SLA de manutenção em campo.',

            'casos_titulo' => 'Casos de Uso Principais (Agricultura de Precisão)',
            'caso1_nome' => 'Mapeamento de Índice de Vegetação (NDVI/NDRE)',
            'caso1_desc' => 'Avalia a saúde da vegetação e o stress das plantas, permitindo a aplicação variável e localizada de fertilizantes.',

            'drones_titulo' => 'Recomendação de Drones e Câmaras',
            'drones_subtitulo' => 'Equipamento otimizado para longos voos e captação de dados NDVI/NDRE.',

            'beneficios_titulo' => 'Benefícios e Retorno do Investimento (ROI)',
            'implementacao_titulo' => 'Processo de Adoção da Tecnologia Drone',
            'implementacao_subtitulo' => 'Guiamos a sua equipa desde a aquisição até à operação autónoma e análise de dados.',

            'faq_titulo' => 'Perguntas Frequentes (FAQ)',
            'faq1_pergunta' => 'Os drones substituem a análise de solo?',
            'faq1_resposta' => 'Não. Os drones complementam a análise de solo. Eles identificam *onde* o problema está, permitindo que a análise de solo seja feita de forma cirúrgica e eficiente.',
            
            'cta_final_titulo' => 'Transforme a sua exploração agrícola em Agricultura 4.0.',
            'cta_final_button' => 'Falar com um Agrónomo Especialista',
        ],
        
        // ---------------------------------------------------------------------
        // 2. ENERGIA & UTILITIES (energia-utilities)
        // ---------------------------------------------------------------------
        'energia' => [ 
            'titulo_seccao' => 'Inspeção e Manutenção para Energia & Utilities ⚡',
            'tagline' => 'Detete falhas, minimize riscos e otimize a manutenção preditiva em infraestruturas críticas (eólicas, solares, linhas de transmissão).',
            
            'nav_problema' => 'Riscos de Falha',
            'nav_solucao' => 'Solução de Termografia',
            'nav_casos' => 'Casos de Uso',
            'nav_drones' => 'Drones & Câmaras Térmicas',
            'nav_beneficios' => 'Segurança e Eficiência',
            'nav_implementacao' => 'Processo de Integração',
            'nav_faq' => 'Questões Técnicas',

            'problema_titulo' => 'Desafios na Inspeção de Ativos Críticos',
            'problema_contexto' => 'A inspeção humana de turbinas eólicas ou painéis solares é perigosa, lenta e sujeita a erros. Falhas não detectadas a tempo resultam em tempo de inatividade dispendioso e perdas de receita significativas.',
            
            'solucao_titulo' => 'Solução SKYDRI: Inspeção Termográfica (Infravermelho)',
            'solucao_hardware' => 'Drones de alta estabilidade (Matrice 30T) equipados com câmaras térmicas (Zenmuse H20T) que identificam anomalias de temperatura (hotspots).',
            'solucao_software' => 'Plataformas de análise de imagem baseadas em IA (DroneDeploy, Pix4D) que processam dados térmicos e geram relatórios automatizados de defeitos.',
            'solucao_servicos' => 'Consultoria de manutenção preditiva, criação de rotas de voo autónomas e apoio à certificação de inspeção de ativos.',

            'casos_titulo' => 'Casos de Uso Principais (Inspeção & Manutenção)',
            'caso1_nome' => 'Inspeção de Painéis Solares (Hotspot Detection)',
            'caso1_desc' => 'Mapeamento rápido de parques solares para identificar células com sobreaquecimento que reduzem a produção energética.',

            'drones_titulo' => 'Equipamento Essencial para Termografia',
            'drones_subtitulo' => 'Os drones e sensores mais fiáveis para operação em grandes alturas e condições variáveis.',

            'beneficios_titulo' => 'Benefícios e ROI (Redução de Downtime)',
            'implementacao_titulo' => 'Processo de Integração nos Sistemas de Manutenção',
            'implementacao_subtitulo' => 'Ligamos o diagnóstico de drones ao seu sistema de gestão de ativos (CMMS) para uma manutenção eficiente.',

            'faq_titulo' => 'Perguntas Frequentes (FAQ)',
            'faq1_pergunta' => 'Os drones conseguem inspecionar ativos em condições de mau tempo?',
            'faq1_resposta' => 'Os drones são resistentes a ventos moderados e chuva leve, mas a inspeção ideal é feita em condições estáveis para garantir a precisão dos dados térmicos.',
            
            'cta_final_titulo' => 'Reduza o risco de falhas em ativos. Peça uma demonstração de termografia.',
            'cta_final_button' => 'Falar com um Engenheiro Especialista',
        ],
        
        // ---------------------------------------------------------------------
        // 3. CONSTRUÇÃO & INFRAESTRUTURAS (construcao-infraestruturas)
        // ---------------------------------------------------------------------
        'construcao' => [ 
            'titulo_seccao' => 'Levantamento e Monitorização para Construção e Infraestruturas 🏗️',
            'tagline' => 'Melhore a precisão do planeamento topográfico, monitorize o progresso da obra em tempo real e inspecione estruturas complexas.',
            
            'nav_problema' => 'Desafios de Topografia',
            'nav_solucao' => 'Solução de Mapeamento 3D',
            'nav_casos' => 'Casos de Uso',
            'nav_drones' => 'Drones Topográficos',
            'nav_beneficios' => 'Precisão e Velocidade',
            'nav_implementacao' => 'Processo de Integração BIM',
            'nav_faq' => 'Questões de Topografia',

            'problema_titulo' => 'Limitações da Topografia Tradicional e da Monitorização',
            'problema_contexto' => 'Levantamentos topográficos com métodos tradicionais são demorados e caros. A monitorização do progresso da obra é descontínua, dificultando a gestão de prazos e orçamentos (BIM).',
            
            'solucao_titulo' => 'Solução SKYDRI: Mapeamento 3D e Monitorização de Obra',
            'solucao_hardware' => 'Drones RTK/PPK (Phantom 4 RTK, M300) que oferecem precisão centimétrica para levantamentos e calibração BIM.',
            'solucao_software' => 'Software de fotogrametria (Pix4Dmapper, RealityCapture) para criar modelos 3D, nuvens de pontos e medições de volume precisas.',
            'solucao_servicos' => 'Consultoria para integração de dados de drones com plataformas BIM, formação em levantamentos aéreos e modelação 3D.',

            'casos_titulo' => 'Casos de Uso Principais (Gestão da Construção)',
            'caso1_nome' => 'Monitorização de Progresso (Ortofotos e 3D)',
            'caso1_desc' => 'Captura regular de ortofotos de alta resolução para comparação do progresso da obra com o modelo planeado (BIM).',

            'drones_titulo' => 'Drones Essenciais para Levantamentos RTK/PPK',
            'drones_subtitulo' => 'O equipamento necessário para garantir precisão vertical e horizontal em projetos de engenharia.',

            'beneficios_titulo' => 'Benefícios e ROI (Agilidade e Precisão)',
            'implementacao_titulo' => 'Processo de Integração BIM e Fluxo de Trabalho',
            'implementacao_subtitulo' => 'Asseguramos que os dados dos drones se tornam uma ferramenta de gestão ativa, e não apenas relatórios.',

            'faq_titulo' => 'Perguntas Frequentes (FAQ)',
            'faq1_pergunta' => 'Os dados do drone podem ser usados diretamente no meu software BIM?',
            'faq1_resposta' => 'Sim. O nosso software exporta nuvens de pontos e malhas 3D em formatos compatíveis (DWG, DXF, LAS) que se integram perfeitamente com a maioria dos softwares BIM/CAD.',
            
            'cta_final_titulo' => 'Garanta a precisão da sua próxima obra. Peça uma consulta de topografia.',
            'cta_final_button' => 'Falar com um Engenheiro Civil Especialista',
        ],
        
        // ---------------------------------------------------------------------
        // 4. GOVERNO & PROTEÇÃO CIVIL (governo-protecao-civil)
        // ---------------------------------------------------------------------
        'governo' => [ 
            'titulo_seccao' => 'Resposta Rápida e Segurança Pública (Governo & Proteção Civil) 🚨',
            'tagline' => 'Aumente a consciência situacional, melhore a resposta a emergências e apoie as operações de busca e resgate.',
            
            'nav_problema' => 'Limitações de Resposta',
            'nav_solucao' => 'Solução de Consciência Situacional',
            'nav_casos' => 'Casos de Uso SAR/Segurança',
            'nav_drones' => 'Drones de Missão Crítica',
            'nav_beneficios' => 'Vidas Salvas e Segurança',
            'nav_implementacao' => 'Processo de Integração em Forças',
            'nav_faq' => 'Questões de Segurança',

            'problema_titulo' => 'A Falta de Informação em Tempo Real em Emergências',
            'problema_contexto' => 'Em cenários de busca e resgate (SAR) ou incêndios, a obtenção de imagens aéreas imediatas é difícil. A falta de consciência situacional atrasa a resposta e põe vidas em risco.',
            
            'solucao_titulo' => 'Solução SKYDRI: Imagem Aérea em Tempo Real (ISR)',
            'solucao_hardware' => 'Drones portáteis e rápidos (Matrice 30, Mavic 3 Enterprise) com câmaras de zoom ótico e visão noturna/termografia para operações 24/7.',
            'solucao_software' => 'Plataformas de transmissão de vídeo (Live Streaming) para comando e controlo, e software para mapeamento rápido de zonas de desastre.',
            'solucao_servicos' => 'Formação de agentes em operação de drones em emergência, apoio à certificação de voo BVR (Beyond Visual Range) e integração com Centros de Operações.',

            'casos_titulo' => 'Casos de Uso Principais (Missão Crítica)',
            'caso1_nome' => 'Busca e Resgate (SAR) com Termografia',
            'caso1_desc' => 'Uso de câmaras térmicas para localizar vítimas de noite ou em zonas densas (floresta, escombros) muito mais rapidamente que equipas terrestres.',

            'drones_titulo' => 'Drones Essenciais para Segurança Pública e Emergência',
            'drones_subtitulo' => 'Equipamento rápido, robusto e com capacidades de imagem térmica e ótica avançada.',

            'beneficios_titulo' => 'Benefícios e ROI (Tempo de Resposta)',
            'implementacao_titulo' => 'Processo de Integração em Forças e Agências',
            'implementacao_subtitulo' => 'Integramos os drones nos protocolos de resposta existentes e fornecemos o treino de simulação necessário.',

            'faq_titulo' => 'Perguntas Frequentes (FAQ)',
            'faq1_pergunta' => 'Os drones podem voar em zonas de exclusão aérea durante emergências?',
            'faq1_resposta' => 'Em Portugal, as forças de segurança e proteção civil podem obter autorizações de emergência imediatas para operar em zonas restritas, mediante comunicação com a ANAC e o centro de comando.',
            
            'cta_final_titulo' => 'Prepare a sua agência para a próxima emergência. Peça uma demonstração.',
            'cta_final_button' => 'Falar com um Especialista em Segurança',
        ],

        // Adicionar Indústria e Projetos à Medida...
    ],
];