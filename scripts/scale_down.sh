#!/usr/bin/env bash
set -e
NEW_REPLICAS=$1
if [ -z "$NEW_REPLICAS" ]; then
  echo "Usage: $0 <replicas>"
  exit 1
fi
kubectl scale deployment/techsupport-app --replicas=$NEW_REPLICAS -n techsupport-ns
