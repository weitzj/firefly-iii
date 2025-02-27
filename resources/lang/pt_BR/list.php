<?php

/**
 * list.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'buttons'                 => 'Botões',
    'icon'                    => 'Ícone',
    'id'                      => 'ID',
    'create_date'             => 'Criado em',
    'update_date'             => 'Atualizado em',
    'updated_at'              => 'Atualizado em',
    'balance_before'          => 'Saldo Antes',
    'balance_after'           => 'Saldo depois',
    'name'                    => 'Nome',
    'role'                    => 'Papel',
    'currentBalance'          => 'Saldo atual',
    'linked_to_rules'         => 'Regras relevantes',
    'active'                  => 'Está ativo?',
    'percentage'              => 'pct.',
    'recurring_transaction'   => 'Transação recorrente',
    'next_due'                => 'Próximo vencimento',
    'transaction_type'        => 'Tipo',
    'lastActivity'            => 'Última atividade',
    'balanceDiff'             => 'Diferença de saldo',
    'other_meta_data'         => 'Outros meta dados',
    'account_type'            => 'Tipo de conta',
    'created_at'              => 'Criado em',
    'account'                 => 'Conta',
    'external_url'            => 'External URL',
    'matchingAmount'          => 'Total',
    'destination'             => 'Destino',
    'source'                  => 'Fonte',
    'next_expected_match'     => 'Próximo correspondente esperado',
    'automatch'               => 'Correspondência automática?',
    'repeat_freq'             => 'Repetições',
    'description'             => 'Descrição',
    'amount'                  => 'Total',
    'date'                    => 'Data',
    'interest_date'           => 'Data de interesse',
    'book_date'               => 'Data reserva',
    'process_date'            => 'Data de processamento',
    'due_date'                => 'Prazo',
    'payment_date'            => 'Data de pagamento',
    'invoice_date'            => 'Data da Fatura',
    'internal_reference'      => 'Referência interna',
    'notes'                   => 'Notas',
    'from'                    => 'De',
    'piggy_bank'              => 'Cofrinho',
    'to'                      => 'Para',
    'budget'                  => 'Orçamento',
    'category'                => 'Categoria',
    'bill'                    => 'Fatura',
    'withdrawal'              => 'Retirada',
    'deposit'                 => 'Depósito',
    'transfer'                => 'Transferência',
    'type'                    => 'Tipo',
    'completed'               => 'Completo',
    'iban'                    => 'IBAN',
    'paid_current_period'     => 'Pago este período',
    'email'                   => 'Email',
    'registered_at'           => 'Registrado em',
    'is_blocked'              => 'Está bloqueado',
    'is_admin'                => 'É admin',
    'has_two_factor'          => 'Tem 2FA',
    'blocked_code'            => 'Bloco de código',
    'source_account'          => 'Conta de origem',
    'destination_account'     => 'Conta de destino',
    'accounts_count'          => 'Número de Contas',
    'journals_count'          => 'Número de transações',
    'attachments_count'       => 'Número de anexos',
    'bills_count'             => 'Número de contas',
    'categories_count'        => 'Número de categorias',
    'budget_count'            => 'Número de orçamentos',
    'rule_and_groups_count'   => 'Número de regras e grupos de regras',
    'tags_count'              => 'Número de tags',
    'tags'                    => 'Indexadores',
    'inward'                  => 'Descrição interna',
    'outward'                 => 'Descrição externa',
    'number_of_transactions'  => 'Número de transações',
    'total_amount'            => 'Valor total',
    'sum'                     => 'Soma',
    'sum_excluding_transfers' => 'Soma (excluindo transferências)',
    'sum_withdrawals'         => 'Soma de retiradas',
    'sum_deposits'            => 'Soma dos depósitos',
    'sum_transfers'           => 'Soma das transferências',
    'sum_reconciliations'     => 'Soma das reconciliações',
    'reconcile'               => 'Pago',
    'sepa_ct_id'              => 'SEPA Identificador end-to-end',
    'sepa_ct_op'              => 'SEPA Identificador de Conta Destino',
    'sepa_db'                 => 'SEPA Identificador Mandatário',
    'sepa_country'            => 'SEPA País',
    'sepa_cc'                 => 'SEPA Código de Compensação',
    'sepa_ep'                 => 'SEPA Finalidade Externa',
    'sepa_ci'                 => 'SEPA Identificador do Credor',
    'sepa_batch_id'           => 'ID de lote SEPA',
    'external_id'             => 'ID externo',
    'account_at_bunq'         => 'Loja com bunq',
    'file_name'               => 'Nome do arquivo',
    'file_size'               => 'Tamanho do Arquivo',
    'file_type'               => 'Tipo do arquivo',
    'attached_to'             => 'Anexado a',
    'file_exists'             => 'Arquivo já existe',
    'spectre_bank'            => 'Banco',
    'spectre_last_use'        => 'Último login',
    'spectre_status'          => 'Status',
    'bunq_payment_id'         => 'ID de pagamento bunq',
    'repetitions'             => 'Repetições',
    'title'                   => 'Título',
    'transaction_s'           => 'Transação(s)',
    'field'                   => 'Campo',
    'value'                   => 'Valor',
    'interest'                => 'Juros',
    'interest_period'         => 'Período de juros',
    'liability_type'          => 'Tipo de passivo',
    'liability_direction'     => 'Liability in/out',
    'end_date'                => 'Data final',
    'payment_info'            => 'Informação de pagamento',
    'expected_info'           => 'Próxima transação esperada',
    'start_date'              => 'Data de início',
];
